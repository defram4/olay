<?php


namespace App\Services;


use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostService
{

    /**
     * @param Request $request
     * @return bool|string
     */
    public function createPost(Request $request)
    {
        try {
            $data = $request->all();
            if ($request->hasFile('post.img')) {
                $data['post']['img'] = storeFile('post', $request->file('post.img'));
            }
            if ($request->hasFile('seo.img')) {
                $data['seo']['img'] = storeFile('post', $request->file('seo.img'));
            }

            $post = Post::create($data['post']);

            if ($request->hasFile('gallery')) {
                foreach ($data['gallery'] as $image) {
                    $img = storeFile('post', $image);
                    $post->gallery()->create(['img' => $img]);
                }
            }


            $meta = $post->meta()->create($data['seo']);
            $post->text()->createMany($data['text']);
            $meta->text()->createMany($data['seotext']);
            return true;
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }

    /**
     * @param Request $request
     * @param Post $blogPost
     */
    public function editPost(Request $request, Post $blogPost)
    {
        $data = $request->all();
        try {
            $meta = $blogPost->meta;
            if ($request->hasFile('post.img')) {
                removeFile('post', $blogPost->img);
                $data['post']['img'] = storeFile('post', $request->file('post.img'));
            }
            if ($request->hasFile('seo.img')) {
                removeFile('post', $meta->img);
                $data['seo']['img'] = storeFile('post', $request->file('seo.img'));
                $meta->update($data['seo']);
            }


            $blogPost->update($data['post']);

            if ($request->hasFile('gallery')) {
                foreach ($data['gallery'] as $image) {
                    $img = storeFile('post', $image);
                    $blogPost->gallery()->create(['img' => $img]);
                }
            }

            foreach ($data['text'] as $key => $text) {
                $trans = $blogPost->text[$key] ?? null;
                if ($trans) {
                    $trans->update($text);
                } else {
                    $blogPost->text()->create($text);
                }
            }
            foreach ($data['seotext'] as $key => $text) {
                $trans = $meta->text[$key] ?? null;
                if ($trans) {
                    $trans->update($text);
                } else {
                    $meta->text()->create($text);
                }
            }
            return true;
        } catch (\Exception $error) {
            return json_encode($error->getMessage());
        }
    }

    public function deletePost(Post $blogPost)
    {
        try {
            $blogPost->load('meta');
            removeFile('post', $blogPost->img);
            removeFile('post', $blogPost->meta->img);
            $blogPost->delete();
            return true;
        } catch (\Exception $error) {
            return $error->getMessage();
        }
    }
}
