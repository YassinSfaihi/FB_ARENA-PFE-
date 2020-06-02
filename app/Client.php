<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'client_id';
    protected $fillable = [
        'name', 'phone','adress'
    ];
}
