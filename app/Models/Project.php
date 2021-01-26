<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'budget',
        'user_id',
    ];



    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
