<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'os_country';
    protected $primaryKey = 'id';
    // public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'country_2_code', 'country_3_code', 'status'];
}
