<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'email', 'phone', 'birth_date'])]
class Customers extends Model
{
    /** @use HasFactory<\Database\Factories\CustomersFactory> */
    use HasFactory;
}
