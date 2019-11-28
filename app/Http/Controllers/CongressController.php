<?php

namespace App\Http\Controllers;

use App\Category;
use App\Congress;
use App\Http\Requests\AddCongress;
use App\Http\Requests\EditCongress;
use Illuminate\Http\Request;

class CongressController extends Controller
{

    public function addCongress(Congress $congress)
    {
        $response = [
            'categories'    =>  Category::all()
        ];
        return view('addPages.congress', $response);
    }

    public function saveAddCongress(AddCongress $congress)
    {
        try {
            $new_congress = Congress::create($congress->all());
        } catch (Exception $e) {
            redirect()->back()->withErrors('msg', $e->errorInfo);
        }
        return redirect('admin');
    }

    public function editCongress(Congress $congress)
    {
        $categories = Category::all();
        return view('editPages.congress', ['congress'=>$congress, 'categories'=>$categories]);
    }

    public function saveEditCongress(EditCongress $congress)
    {
        try {
            $old_congress = Congress::find($congress->id);
            $old_congress->update($congress->all());
        } catch (Exception $e) {
            redirect()->back()->withErrors('msg', $e->errorInfo);
        }
        return redirect()->back()->with('message', 'Edit Successful!');
    }

    public function deleteCongress(Congress $congress)
    {
        $congress->delete();
        return redirect()->back();
    }

}
