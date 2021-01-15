<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\FreelanceModel;


class FreelanceController extends Controller
{

    private $freelanceModel = null;    
    /**
     * __construct
     * This construstor initializ new instance of FreelanceModel
     * for get all logic on this model
     *
     * @return void
     */
    public function __construct()
    {
        $this->freelanceModel = new FreelanceModel;
    }

    /**
     * Display a listing of the freelancer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.freelancer.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function allFreelancers ()
    {
        // $freelancers = User::all()->where('role_id', 2);
        return view('users.freelancer.prestataire', ['freelancers' => $this->freelanceModel->getAllFreelancers()]);
    }

    public function freelancerInfo ($id)
    {
        return view('users.freelancer.freelancer_profile', ['user' => $this->freelanceModel->getFreelancerInfo()]);
    }
}
