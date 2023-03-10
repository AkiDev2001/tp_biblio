<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'path'
    ];

    public static function find($_path) {
        return DB::query()->select()->from('documents')->where('path', '=', $_path)->first();
    }

}
