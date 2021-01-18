<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Auth;

class FreelanceModel extends Model
{
    use HasFactory;

     /**
     * getAllFreelancers
     * function for get All freelancers
     *
     * @return void
     */
    public function getAllFreelancers(){
        return User::all()->where('role_id', 2);
    }

    public function getFreelancerInfo ()
    {
        return Auth::user()->where('role_id', 2);
    }
}
