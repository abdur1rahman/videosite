<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    public $table='video';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=false;
}
