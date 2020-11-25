<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Education extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'educations';

    protected $fillable = [
        'name'
    ];

    protected $hidden = [

    ];

    public function individual()
    {
        return $this->hasMany('App\Models\Individual');
    }
}
