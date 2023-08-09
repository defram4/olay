<?php


namespace App\Services;


use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as ImageResize;


class ProjectService
{
    public function store(ProjectStoreRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('img_1')) {
            $data['img_1'] = storeFile('project', $request->file('img_1'));
        }
        if ($request->hasFile('img_2')) {
            $data['img_2'] = storeFile('project', $request->file('img_2'));
        }

        if ($request->hasFile('seo.img')) {
            $data['seo']['img'] = storeFile('project', $request->file('seo.img'));

            $img = $request->file('seo.img');
            ImageResize::make($img)
                ->fit(800, 800)
                ->save(helperStoragePath('project', $data['seo']['img']));
        }

        $project = Project::create([
            'img_1' => $data['img_1'],
            'img_2' => $data['img_2'],
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($data['gallery'] as $image) {
                $img_1 = storeFile('project', $image);
                $project->gallery()->create(['image_1' => $img_1]);
                $img_2 = storeFile('project', $image);
                $project->gallery()->create(['image_2' => $img_2]);
            }
        }

        $meta = $project->meta()->create($data['seo']);
        $project->text()->createMany($data['text']);
        $meta->text()->createMany($data['seotext']);

        return true;
    }

    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $data = $request->validated();
//        $project->load(['text', 'gallery', 'meta.text']);
        $meta = $project->meta;

        if ($request->hasFile('img_1')) {
            removeFile('project', $project->img_1);
            $data['img_1'] = storeFile('project', $request->file('img_1'));
            $project->update([
                'img_1' => $data['img_1']
            ]);
        }
        if ($request->hasFile('img_2')) {
            removeFile('project', $project->img_2);
            $data['img_2'] = storeFile('project', $request->file('img_2'));
            $project->update([
                'img_2' => $data['img_2']
            ]);
        }

        if ($request->hasFile('seo.img')) {
            removeFile('project', $meta->img);
            $data['seo']['img'] = storeFile('project', $request->file('seo.img'));

            $img = $request->file('seo.img');
            ImageResize::make($img)
                ->fit(800, 800)
                ->save(helperStoragePath('project', $data['seo']['img']));

            $meta->update([
                'img' => $data['seo']['img']
            ]);
        }

        if ($request->hasFile('gallery')) {
            if ($project == null) {
                $img = 0;
                $project = $project->gallery()->create(['image' => $img]);
            } else {
                removeFile('project', $project->img);
                foreach ($data['gallery'] as $image) {
                    $img = storeFile('project', $image);
                    $project->gallery()->create(['image' => $img]);
                }
            }
        }

        $project->update($data);


        (new TextService())->updateText($data['text'], $project);
        (new TextService())->updateText($data['seotext'], $meta);
        return true;
    }

}
