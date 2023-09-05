<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateJobRequest;


class CategoryController extends Controller
{
    /**
     * Display a listiCreateCategoryRequest
     */
    public function index()
    {
        //CreateCategoCreateCategoryRequest
        $data=Category::select('*')->orderby('id','ASC')->paginate(3);
        return view('index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('create');
        //display form

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategoryRequest $request)
    {
        
        $datatoinsert['name']=$request->category_name;
        $datatoinsert['description']=$request->category_desc;
        Category::create( $datatoinsert);

        return redirect()->route('index-category')->with(['success'=>'Added Successfully']);
        // return redirect('index');
    }

    
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Category::select("*")->find($id);
        return view('edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id ,UpdateJobRequest $request)
    {
        $datatoupdate['name']=$request->category_name;
        $datatoupdate['description']=$request->category_desc;
        Category::where(['id'=>$id])-> update( $datatoupdate);
        return redirect()->route('index-category')->with(['success'=>'Updated Successfully']);



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Category::where(['id'=>$id])->delete();
        return redirect()->route('index-category')->with(['success'=>'Deleted Successfully']);


    }
}
