<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\AddCategory;
use App\Http\Requests\EditCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function addCategory(Category $category)
    {
        return view('addPages.category');
    }

    public function saveAddCategory(AddCategory $category)
    {
        try {
            $new_category = Category::create($category->all());
        } catch (Exception $e) {
            redirect()->back()->withErrors('msg', $e->errorInfo);
        }
        return redirect('admin');
    }

    public function editCategory(Category $category)
    {
        return view('editPages.category', ['category'=>$category]);
    }

    public function saveEditCategory(EditCategory $category)
    {
        try {
            $old_category = Category::find($category->id);
            $old_category->update($category->all());
        } catch (Exception $e) {
            redirect()->back()->withErrors('msg', $e->errorInfo);
        }
        return redirect()->back()->with('message', 'Edit Successful!');
    }

    public function deleteCategory(Category $category)
    {
        $category->delete();
        return redirect()->back();
    }

}
