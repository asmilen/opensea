<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 1/31/2018
 * Time: 3:22 PM
 */

namespace App\Repositories;

use App\Models\Ticket;
use App\Models\TicketComponent;
use App\Models\TicketFeatures;
use Illuminate\Support\Facades\DB;

class TicketFeatureRepository extends BaseRepository
{
    const MODEL = TicketFeatures::class;
    
    public function getData($filter = []) {
        $query = $this->query($filter);
        
        return $query->get($filter['columns']);
    }

    public function query($filter = [])
    {
        $columns = ['*'];
        $query = parent::query($filter);

        if (array_key_exists('ticket_id', $filter) && $filter['ticket_id']) {
            $query->where('ticket_id', '=', $filter['ticket_id']);
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