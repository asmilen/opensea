<?php

namespace App\Transformers;
use \League\Fractal\TransformerAbstract;

use App\Models\Tour;

class FrontendTourTransformer extends TransformerAbstract
{
    public function transform(Tour $tour)
    {
        return [
            'backend_id'            => $tour->id,
            'type'                  => $tour->type == 'normal' ? 0 : 1,
            'title'                 => $tour->name,
            'descriptions'          => \App::isLocale('vi') ? explode(PHP_EOL, $tour->description_vi) : explode(PHP_EOL, $tour->description),
            'images'                => [$tour->image],
            'prices'                => $tour->price,
            'includes'              => \App::isLocale('vi') ? explode(PHP_EOL, $tour->include_vi) : explode(PHP_EOL, $tour->include),
            'addon'                 =>  \App::isLocale('vi') ? explode(PHP_EOL, $tour->add_on_vi) : explode(PHP_EOL, $tour->add_on),
        ];
    }
}