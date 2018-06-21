<?php

namespace App\Transformers;
use \League\Fractal\TransformerAbstract;

use App\Models\Tour;

class FrontendTourTransformer extends TransformerAbstract
{
    public function transform(Tour $tour)
    {
        return [
            'type'          => ($tour->type) == 'normal' ? 0 : 1,
            'title'          => $tour->name,
            'description'         => [$tour->description],
            'images'       => [$tour->image],
            'prices' => $tour->price,
            'includes' => [$tour->include],
            'addon' => [$tour->add_on],
        ];
    }
}