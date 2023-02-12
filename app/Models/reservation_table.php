<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation_table extends Model
{
    use HasFactory;

    protected $table = 'reservation_tables';

    protected $primaryKey = 'id';

    protected $fillable = [
      'car_id',
      'customer_id',
      'pick_up_location',
      'drop_off_location',
      'pick_up_time',
      'drop_off_time'
    ];
}
