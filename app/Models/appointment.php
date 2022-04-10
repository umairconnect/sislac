<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class appointment extends Model
{
    use HasFactory;
    public $timestamps=false;
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = IdGenerator::generate(['table' => 'appointments', 'length' => 6, 'prefix' =>date('y')]);
        });
    }
}
