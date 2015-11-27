<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
/*
*added by Jonas
*/
use Illuminate\Database\Eloquent\SoftDeletes;

class Employe extends Model
{
    /*
    *added by Jonas
    */
    use SoftDeletes;

     protected $table    = 'employes';

	protected $fillable = ['name','surname','notified','available','planned','comment'];

	protected $hidden   = [ ];

	protected $dates    = ['deleted_at'];
}
