<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\categorie;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = categorie::all();
    	return view('Back.categories.index',compact('categories'));
    }

    public function create()
    {
    	return view('Back.categories.create'); 
    }

    public function store (Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'photo' => 'required',
    	]);

    	categorie::create($request->all());
    	return redirect()->route('back.categories.index');
    }

    public function edit($id){
        $categories = categorie::all();
        $category = categorie::Find($id);
        return view('back.categories.edit', compact('category','categories'));

    }

    public function update(Request $request){
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required',
        ]);

        categorie::find($id)->update($request->all());
        return redirect()->route('back_categories');

    }

}
