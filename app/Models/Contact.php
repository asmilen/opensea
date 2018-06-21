<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 2/28/2018
 * Time: 11:18 AM
 */

namespace App\Models;


class Contact extends BaseModel
{
    protected $table = 'request';
    protected $fillable = [
        'name', 'email', 'phone', 'content'
    ];
}