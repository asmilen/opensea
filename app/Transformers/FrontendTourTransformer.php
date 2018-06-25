<?php

namespace App\Transformers;
use \League\Fractal\TransformerAbstract;

use App\Models\Tour;

class FrontendTourTransformer extends TransformerAbstract
{
    public function transform(Tour $tour)
    {
        return [
            'type'                  => $tour->type == 'normal' ? 0 : 1,
            'title'                 => $tour->name,
            'descriptions'          => explode(PHP_EOL, $tour->description),
            'images'                => [$tour->image],
            'prices'                => json_decode($tour->price),
            'includes'              => explode(PHP_EOL, $tour->include),
            'addon'                 => explode(PHP_EOL, $tour->add_on),
        ];
    }
}