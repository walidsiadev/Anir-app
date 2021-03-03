<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    // Table Name
   protected $table = 'fournisseur';

   // Primary Key
   public $primaryKey = 'id';
   public $timestamps = true;
}
