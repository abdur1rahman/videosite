<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitorModel extends Model
{
    public $table='Visitor';
    public $primaryKey='id';
    public $incrementing=true;
    public $keyType='int';
    public  $timestamps=true;
}
