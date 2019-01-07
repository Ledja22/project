<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class GuiderInformation extends Model
{
    use SoftDeletes;

    public $table="guider_information";

}
