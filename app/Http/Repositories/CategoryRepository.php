<?php
namespace App\Http\Repositories;

use App\Models\Category;

class CategoryRepository{

    public function getAll()
    {
        return Category::all();
    }

    public function getOne($categoryId)
    {
        return Category::where('id', $categoryId)->firstOrFail();
    }

    public function addCategory($datas)
    {
        $categoryObj = new Category();
        return $this->saveCategory($datas, $categoryObj);
    }

    public function updateCategory($datas){
        $categoryObj = Category::where('id', $datas['category_id'])->first();
        return $this->saveCategory($datas, $categoryObj);
    }

    public function saveCategory($datas, $categoryObj)
    {
        $categoryObj->name = $datas['name'];
        return $categoryObj->save();
    }

    public function deleteCategory($categoryId)
    {
        $categoryObj = Category::where('id', $categoryId)->first();
        return $categoryObj->delete();
    }

}