<?php
/**
 * User: Lap Dam
 * Date: 18/11/18
 * Time: 11:38 AM
 */


namespace App\Repositories;
use App\Models\Category;

class CategoryRepository extends BaseRepository {

    const MODEL = Category::class;

    public function query($filter = [])
    {
        $query = parent::query($filter);
         $tableName = Category::getTableName().'.';

        if (array_key_exists("name", $filter)) {
            $query->where($tableName . 'name', 'LIKE', '%'.$filter['name'].'%');
        }
        if (array_key_exists("status", $filter)) {
            $query->where($tableName . 'status', '=', $filter['status']);
        }
        return $query;
    }
}
