<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class useSkill extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'useSkills';

    
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
    
    public function item()
    {
        return $this->hasMany('App\Item');
    }
    
    public function tier()
    {
        return $this->hasMany('App\Tier');
    }
    
}
