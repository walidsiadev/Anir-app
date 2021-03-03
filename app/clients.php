<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    // Table Name
    protected $table = 'clients';

    // Primary Key
    public $primaryKey = 'id';
    public $timestamps = true;
}
