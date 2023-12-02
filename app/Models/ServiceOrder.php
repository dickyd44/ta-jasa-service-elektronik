<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'problem',
        'phone',
        'date',
        'price',
        'status'
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::now($this->attributes['created_at'])
            ->translatedFormat('d F Y');
    }
}
