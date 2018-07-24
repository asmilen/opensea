<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:22 PM
 */

namespace App\Repositories;

use App\Models\CustomerMessage;
use Illuminate\Support\Facades\DB;

class CustomerMessageRepository extends BaseRepository
{
    const MODEL = CustomerMessage::class;
    public function query($filter = [])
    {
        $columns = ['customer_message.*'];
        $query = parent::query($filter);
        if (array_key_exists('name', $filter) && $filter['name']) {
            $query->where('customer_message.name', '=', $filter['name']);
        }
        if (array_key_exists('email', $filter) && $filter['email']) {
            $query->where('customer_message.email', 'like', '%' . $filter['email'] . '%');
        }
        if (array_key_exists('phone_number', $filter) && $filter['phone_number']) {
            $query->where('customer_message.phone_number', '=', $filter['phone_number']);
        }
        if (array_key_exists('status', $filter) && $filter['status']) {
            $query->where('customer_message.status', '=', $filter['status']);
        }
        $query->select($columns);
        if (!array_key_exists('orders', $filter)) {
            $query->orderBy('customer_message.created_at', 'desc');
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