<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemotePage extends Model
{
    use HasFactory;

    protected $table = 'remote_page';
    protected $guarded = ['id'];
}
