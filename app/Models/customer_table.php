<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer_table extends Model
{
    use HasFactory;

    protected $table = 'customer_tables';

    protected $primaryKey = 'id';

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'age',
        'address',
        'city',
        'zip_code'
    ];
}
