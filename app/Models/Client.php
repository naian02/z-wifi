<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',    // Add the 'name' field here
        'email',   // Add other fields as needed
        'phone',   // For example, 'phone'
        'address'  // Any additional fields you want to allow for mass assignment
    ];
}
