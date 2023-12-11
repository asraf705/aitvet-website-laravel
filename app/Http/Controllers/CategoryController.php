<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\DepertmentCategory;
use App\Models\SemesterCategory;
use App\Models\FeesCategory;
use App\Models\AdmintionCategory;



class CategoryController extends Controller
{
    public static $depertmentcategory,$semestercategory,$feescategory,$admintioncategory;

    // all manage category

    public function manageCategory(){
        return view('admin.category.manag-category',[
            'depertment_categories'=> DepertmentCategory::all(),
            'semester_categories' => SemesterCategory::all(),
            'fees_categories' => FeesCategory::all(),
            'admintion_categories' => AdmintionCategory::all(),

        ]);
    }

    // -------------------- depertment ----------------------------


    public function depertmentaddcategory(){
        return view('admin.category.add-dept-category');
    }

    public function deptsaveCategory(Request $request){
        DepertmentCategory::deptsaveCategory($request);
        return back();
    }

    public function depteditCategory($id){
        return view('admin.category.edit-dept-category',[
            'depertment'=> DepertmentCategory::find($id)
        ]);
    }

    public function deptupdateCategory(Request $request){
        DepertmentCategory::deptupdateCategory($request);
        return back();
    }

    public function deptdeleteCategory($id){
        self::$depertmentcategory = DepertmentCategory::find($id);
        self::$depertmentcategory->delete();
        return back();
    }

    // -------------------- semester ----------------------------
    public function semsteraddcategory(){
        return view('admin.category.add-sem-category');
    }

    public function semesaveCategory(Request $request){
        SemesterCategory::semesaveCategory($request);
        return back();
    }

    public function semedeleteCategory($id){
        self::$semestercategory = SemesterCategory::find($id);
        self::$semestercategory->delete();
        return back();
    }

    // -------------------- fees ----------------------------
    public function feesaddcategory(){
        return view('admin.category.add-fees-category');
    }

    public function feesaveCategory(Request $request){
        FeesCategory::feesaveCategory($request);
        return back();
    }


    public function feedeleteCategory($id){
        self::$feescategory = FeesCategory::find($id);
        self::$feescategory->delete();
        return back();
    }

    //------------------ admintion ------------------------------>

    public function admiaddcategory(){
        return view('admin.category.add-admintion-category',[
            'depertment_categories' => DepertmentCategory::all()
        ]);
    }

    public function admisaveCategory(Request $request){
        AdmintionCategory::admisaveCategory($request);
        return back();
    }

    public function admishowCategory(string $id)
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




}
