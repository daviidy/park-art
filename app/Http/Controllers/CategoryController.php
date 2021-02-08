<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    public function index()
    {
        $categories = $this->categoryRepository->getAll();
        return view('users.admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('users.admin.categories.create');
    }

    public function saveCategory(Request $request)
    {
        $request->validate(['name' => 'required|unique:categories,name']);

        try {
            $datas = $request->all();
            if ($this->categoryRepository->addCategory($datas)){
                session(['notification_icon'=>'check_circle']);
                Flashy::success('Nouvelle catégorie ajoutée');
                return redirect('admin/categories');
            }else{
                session(['notification_icon'=>'error']);
                Flashy::error('Une erreur est survenue lors de l\'enregistrement');
                return back();
            }
            }catch(\Exception $exception){
                session(['notification_icon'=>'error']);
                Flashy::error('Une erreur est survenue lors de l\'enregistrement');
                return back();
            }
    }

    public function edit($category_id)
    {
        $category = $this->categoryRepository->getOne($category_id);
        return view('users.admin.categories.edit', compact('category'));
    }    

    public function updateCategory(Request $request)
    {
        $request->validate(['name' => 'required|unique:categories,name']);

        try {
            $datas = $request->all();
            if ($this->categoryRepository->updateCategory($datas)){
                session(['notification_icon'=>'check_circle']);
                Flashy::success('Catégorie modifiée avec succès');
                return redirect('admin/categories');
            }else{
                session(['notification_icon'=>'error']);
                Flashy::error('Une erreur est survenue lors de la modification');
                return back();
            }
            }catch(\Exception $exception){
                session(['notification_icon'=>'error']);
                Flashy::error('Une erreur est survenue lors de la modification');
                return back();
            }
    }

    public function deleteCategory($category_id)
    {
        try {
             $response = $this->categoryRepository->deleteCategory($category_id);
             if ($response){
                session(['notification_icon'=>'check_circle']);
                Flashy::success('Catégorie supprimée avec succès');
                return back();
            }else{
                session(['notification_icon'=>'error']);
                Flashy::error('Une erreur est survenue lors de la suppression');
                return back();
            }
            }catch(\Exception $exception){
                session(['notification_icon'=>'error']);
                Flashy::error('Une erreur est survenue lors de la suppression');
                return back();
            }
       

    }
}
