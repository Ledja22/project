<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Guider extends Model
{
    use SoftDeletes;
    public  $table = 'users';
}
