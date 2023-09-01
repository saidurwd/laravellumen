<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $table = 'os_customer';
    protected $primaryKey = 'id';
    // public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['category', 'customer_id', 'customer_name', 'email', 'national_id', 'address', 'mobile', 'created_on', 'created_by'];
}
