<?php


namespace App\Services;


use App\Http\Requests\ContentRequest;
use App\Models\Content;

class ContentService
{
    public function store(ContentRequest $request)
    {
        $data = $request->validated();
        $content = Content::create($data['content']);
        $content->text()->createMany($data['text']);
        return true;
    }

    public function update(ContentRequest $request, Content $content)
    {
        $data = $request->validated();
        $content->load('text');
        $content->update($data['content']);
        (new TextService())->updateText($data['text'], $content);
        return true;
    }
}
