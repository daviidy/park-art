<?php
namespace App\Http\Repositories;

use App\Models\Proposal;
use Illuminate\Support\Facades\Auth;

class FreelancerRepository{

    public function saveProposal($datas)
    {
        $proposalObj = new Proposal();
        $proposalObj->user_id = Auth::user()->id;   
        $proposalObj->project_id = $datas['project_id'];   
        $proposalObj->budget = $datas['budget'];   
        $proposalObj->deadline = $datas['deadline'];   

        return $proposalObj->save();
    }
}