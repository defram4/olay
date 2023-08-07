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

        if ($request->hasFile('img')) {
            $data['img'] = storeFile('project', $request->file('img'));
        }

        if ($request->hasFile('seo.img')) {
            $data['seo']['img'] = storeFile('project', $request->file('seo.img'));

            $img = $request->file('seo.img');
            ImageResize::make($img)
                ->fit(800, 800)
                ->save(helperStoragePath('project', $data['seo']['img']));
        }

        $project = Project::create([
            'img' => $data['img'],
        ]);

        if ($request->hasFile('gallery')) {
            foreach ($data['gallery'] as $image) {
                $img = storeFile('project', $image);
                $project->gallery()->create(['image' => $img]);
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

        if ($request->hasFile('img')) {
            removeFile('project', $project->img);
            $data['img'] = storeFile('project', $request->file('img'));
            $project->update([
                'img' => $data['img']
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
