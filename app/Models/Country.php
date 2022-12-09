<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'population',
        'capital_city',
        'continent',
        'ranking',
        'group_id'
    ];
    public function groups() {
        return $this->belongsTo(Group::class);
    }
}
