<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BaseModel extends Model
{
    use HasFactory;
    protected static function boot()
    {
        parent::boot();

        // Automatically generate a UUID for new models
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }

    // Add UUID to fillable fields if needed
    protected $fillable = [
        'uuid',
        // Other fields...
    ];
}

