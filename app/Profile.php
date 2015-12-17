<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'characterName'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function useSkill()
    {
        return $this->hasMany('App\useSkill');
    }
    
    
}
