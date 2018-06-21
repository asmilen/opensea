<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:22 PM
 */

namespace App\Repositories;

use App\Models\Request;
use App\Models\Tour;
use App\Models\TourRequest;
use Illuminate\Support\Facades\DB;

class RequestRepository extends BaseRepository
{
    const MODEL = Request::class;
    public function query($filter = [])
    {
        $columns = ['request.*'];
        $query = parent::query($filter);
        if (array_key_exists('id', $filter) && $filter['id']) {
            $query->where('request.id', '=', $filter['id']);
        }
        if (array_key_exists('email', $filter) && $filter['email']) {
            $query->where('request.email', 'like', '%' . $filter['email'] . '%');
        }
        if (array_key_exists('status', $filter) && $filter['status']) {
            $query->where('request.status', '=', $filter['status']);
        }
        $query->select($columns);
        if (!array_key_exists('orders', $filter)) {
            $query->orderBy('request.created_at', 'desc');
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