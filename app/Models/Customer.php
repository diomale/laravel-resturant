<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    protected $table = 'customer_table';
    protected $primaryKey = 'cust_id';

    protected $fillable = [
        'cust_name',
        'cust_address',
    ];
}
