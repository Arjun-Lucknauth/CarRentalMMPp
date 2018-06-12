<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        "user_id",
        "vehicle_id",
        "pickupLocation",
        "returnLocation",
        "book_from",
        "book_to",
        "name",
        "phone",
        "email",
        "numberOfDays",


    ];
}
