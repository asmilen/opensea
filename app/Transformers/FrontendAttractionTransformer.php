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
            'content'          => $attraction->description,
            'image'                => $attraction->image,
        ];
    }
}