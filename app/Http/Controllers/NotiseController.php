<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notise;

class NotiseController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private static $notise;

    public function index()
    {
        return view('admin.notise.manag-notise',[
            'notise'=>Notise::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.notise.add-notise');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Notise::saveInfo($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //not need it
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.notise.edit-notise',[
            'notise' =>Notise::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Notise::updateInfo($request,$id);
        return redirect(route('notise.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$notise = Notise::find($id);
        if (self::$notise->image){
            unlink(self::$notise->image);
        }
        self::$notise->delete();
        return back();
    }
}
