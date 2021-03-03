<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    // Table Name
    protected $table = 'produits';

    // Primary Key
    public $primaryKey = 'id';
    public $timestamps = true;
}
