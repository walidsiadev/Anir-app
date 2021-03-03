<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facture extends Model
{
   // Table Name
   protected $table = 'facture';

   // Primary Key
   public $primaryKey = 'id';
   public $timestamps = true;
}
