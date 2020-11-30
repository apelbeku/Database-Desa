<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    use HasFactory;

    protected $fillable = [];

    protected $hidden = [];

    public function individual()
    {
        return $this->hasMany('App\Models\Individual');
    }
}
