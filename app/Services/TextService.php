<?php


namespace App\Services;


class TextService
{
    /**
     * @param $textData
     * @param $model
     * @return bool
     */
    public function updateText($textData, $model)
    {
        foreach ($textData as $key => $text) {
            $trans = $model->text[$key] ?? null;
            if ($trans) {
                $trans->update($text);
            } else {
                $model->text()->create($text);
            }
        }
        return true;
    }
}
