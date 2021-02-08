<?php
namespace App\Http\Repositories;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Media;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FreelancerRepository{

    public function getUser($id)
    {
        $user = User::where('id', $id)
        ->with(['educations'=>function($education){
            $education->with('medias');
        }])
        ->first();
        return $user;
    }

    public function saveProposal($datas)
    {
        $proposalObj = new Proposal();
        $proposalObj->user_id = Auth::user()->id;   
        $proposalObj->project_id = $datas['project_id'];   
        $proposalObj->budget = $datas['budget'];   
        $proposalObj->deadline = $datas['deadline'];   

        return $proposalObj->save();
    }

    public function addEducation($datas)
    {
        $objEducation = new Education();
        return $this->saveEducation($datas, $objEducation);

    }

    public function updateEducation($datas)
    {
        $objEducation = Education::where('id', $datas['education_id']);
        return $this->saveEducation($datas, $objEducation);
    }
    
    private function saveEducation($datas, $objEducation)
    {
        $objEducation->title = $datas['title'];
        $objEducation->description = $datas['description'];
        $objEducation->begin_at = $datas['begin_at'];
        $objEducation->end_at = $datas['end_at'];
        $objEducation->user_id = Auth::user()->id;

        return $objEducation->save() ? $objEducation : null;
    }

    public function deleteEducation($educationId)
    {
        $education = Education::where('id', $educationId)->firstOrFail();
        return $education->delete();
    }

    public function addExperience($datas)
    {
        $objEducation = new Experience();
        return $this->saveExperience($datas, $objEducation);
    }

    public function updateExperience($datas)
    {
        $objEducation = Experience::where('id', $datas['education_id']);
        return $this->saveEducation($datas, $objEducation);
    }
    
    private function saveExperience($datas, $objExperience)
    {
        $objExperience->title = $datas['title'];
        $objExperience->description = $datas['description'];
        $objExperience->begin_at = $datas['begin_at'];
        $objExperience->end_at = $datas['end_at'];
        $objExperience->user_id = $datas['user_id'];

        return $objExperience->save();
    }

    public function deleteExperience($experienceId)
    {

    }

    public function addMedia($datas)
    {
        $mediaObjet = new Media();
        $mediaObjet->name = $datas['media'];
        if(isset($datas['message_id'])) $mediaObjet->message_id = $datas['message_id'];
        if(isset($datas['educations_id']))$mediaObjet->educations_id = $datas['educations_id'];
        if(isset($datas['experience_id']))$mediaObjet->experience_id = $datas['experience_id'];

        return $mediaObjet->save();
    }
}