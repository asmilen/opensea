<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:22 PM
 */

namespace App\Repositories;

use App\Models\Tour;
use App\Models\TourRequest;
use Illuminate\Support\Facades\DB;

class TourRequestRepository extends BaseRepository
{
    const MODEL = TourRequest::class;
    public function query($filter = [])
    {
        $columns = ['tour_request.*', 'tour.name as tour_name'];
        $query = parent::query($filter);
        $query->leftJoin('tour', 'tour.id', '=', 'tour_request.tour_id');
        if (array_key_exists('id', $filter) && $filter['id']) {
            $query->where('tour_request.id', '=', $filter['id']);
        }
        if (array_key_exists('search_tour', $filter) && $filter['search_tour']) {
            $query->where('tour.name', 'like', '%' . $filter['search_tour'] . '%');
        }
        if (array_key_exists('email', $filter) && $filter['email']) {
            $query->where('tour_request.email', 'like', '%' . $filter['email'] . '%');
        }
        if (array_key_exists('status', $filter) && $filter['status']) {
            $query->where('tour_request.status', '=', $filter['status']);
        }
        $query->select($columns);
        if (!array_key_exists('orders', $filter)) {
            $query->orderBy('tour_request.created_at', 'desc');
        }
        return $query;
    }

    public function baseQuery($filter = [])
    {
        $query = parent::query($filter);

        return $query;
    }



    public function checkSlug($slug, $id = 0) {
        $query= DB::table('blogs')->where('slug', '=', $slug);
        if ($id) {
            $query->where('id', '!=', $id);
        }
        $data = $query->first();
        $retval = true;
        if ($data) {
            $retval = false;
        }
        return $retval;
    }
}