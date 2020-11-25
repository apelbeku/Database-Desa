<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyCard extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'number_kk'
    ];

    protected $hidden = [

    ];

    public function individual()
    {
        return $this->hasMany('App\Models\Individual');
    }
}
