<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'professionnal',
        'addresse',
        'civility',
        'name',
        'company',
        'firstname',
        'phone',
        'adressbis',
        'postal',
        'city'];}
