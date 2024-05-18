<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function models()
    {
        return $this->belongsTo(Carm::class, 'model');
    }

    public function Brand()
    {
        return $this->belongsTo(Brand::class, 'manufacturer');
    }
}
