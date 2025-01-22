<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    public test() {
        return 'teste';
    }

    public anotherWrongMethod(): Test
    {
        return Xyz;
    }
}
