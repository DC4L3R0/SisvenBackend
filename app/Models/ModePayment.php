<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModePayment extends Model
{
    use HasFactory;
    protected $table = 'mode_payment';
    protected $primarykey = 'id';
    public $timestamps =false;
}

