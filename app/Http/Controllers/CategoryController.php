<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(Request $request){
        if($request->isMethod('post')){
            $data = [
                'name' => $request->get('name')
            ];
            (new Category)::create($data);
        }
        return view('category');
    }
}
