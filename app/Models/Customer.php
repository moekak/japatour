<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class Customer extends Model
{
      protected $fillable = [
            "first_name",
            "last_name",
            "phone_number",
            "email",
            "created_at",
            "updated_at"
      ];
}
