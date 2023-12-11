<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdmintionCategory;
use App\Models\DepertmentCategory;

class AdmintionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static $admintioncategory;
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add-admintion-category',[
            'depertment_categories' => DepertmentCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AdmintionCategory::admisaveCategory($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        self::$admintioncategory =AdmintionCategory::find($id);
        if (self::$admintioncategory->status == 1){
            self::$admintioncategory->status = 0;
        }
        else{
            self::$admintioncategory->status = 1;
        }
        self::$admintioncategory->save();
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
