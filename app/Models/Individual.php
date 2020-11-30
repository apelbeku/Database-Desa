<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use League\CommonMark\Extension\Table\Table;

class Individual extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $connection = 'individuals'; 
    protected $table = 'individuals';

    protected $fillable = [
        'name', 'Profession_id', 'Education_id', 'Marital_id', 'Religion_id', 'Relation_id', 'family_card_id', 'nik', 'gender', 'date_of_birth', 'citizenship', 'address', 'father', 'mother'
    ];

    protected $hidden = [

    ];

    public function profession()
    {
        return $this->belongsTo('App\Models\Profession');
    }

    public function education()
    {
        return $this->belongsTo('App\Models\Education');
    }

    public function marital()
    {
        return $this->belongsTo('App\Models\Marital');
    }

    public function religion()
    {
        return $this->belongsTo('App\Models\Religion', 'religion_id', 'id')->withTrashed();
    }

    public function relation()
    {
        return $this->belongsTo('App\Models\Relation');
    }

    public function family_card()
    {
        return $this->belongsTo('App\Models\FamilyCard');
    }

    public function city()
    {
        return $this->belongsTo('App\Models\City');
    }

    public function district()
    {
        return $this->belongsTo('App\Models\District');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }

    public function village()
    {
        return $this->belongsTo('App\Models\Village');
    }
}
