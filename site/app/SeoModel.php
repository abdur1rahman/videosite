<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeoModel extends Model
{
    public $table='pageseo';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;
}
