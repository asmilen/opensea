<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:22 PM
 */

namespace App\Repositories;

use App\Models\OnlineOrder;
use Illuminate\Support\Facades\DB;

class OnlineOrderRepository extends BaseRepository
{
    const MODEL = OnlineOrder::class;

    public function query($filter = [])
    {
        $columns = ['tour.*'];
        $query = parent::query($filter);
        // if (array_key_exists('type', $filter) && $filter['type']) {
        //     $query->where('tour.type', '=', $filter['type']);
        // }
        // if (array_key_exists('search', $filter) && $filter['search']) {
        //     $query->where('tour.name', 'like', '%' . $filter['search'] . '%');
        // }
        $query->select($columns);
        return $query;
    }

    public function baseQuery($filter = [])
    {
        $query = parent::query($filter);

        return $query;
    }
}