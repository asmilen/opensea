<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:22 PM
 */

namespace App\Repositories;

use App\Models\Attraction;
use Illuminate\Support\Facades\DB;

class AttractionRepository extends BaseRepository
{
    const MODEL = Attraction::class;
    public function query($filter = [])
    {
        $columns = ['attraction.*'];
        $query = parent::query($filter);
        if (array_key_exists('search', $filter) && $filter['search']) {
            $query->where('attraction.name', 'like', '%' . $filter['search'] . '%');
        }
        $query->select($columns);
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