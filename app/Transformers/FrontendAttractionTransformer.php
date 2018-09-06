<?php

namespace App\Transformers;
use App\Models\Attraction;
use \League\Fractal\TransformerAbstract;

class FrontendAttractionTransformer extends TransformerAbstract
{
    public function transform(Attraction $attraction)
    {
        return [
            'backend_id'                    => $attraction->id,
            'title'                 => $attraction->name,
            'content'          => \App::isLocale('vi') ? $attraction->description_vi : $attraction->description,
            'image'                => $attraction->image,
        ];
    }
}