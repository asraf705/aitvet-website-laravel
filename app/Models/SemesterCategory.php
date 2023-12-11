<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SemesterCategory extends Model
{
    use HasFactory;

    public static $semestercategory;
    public static function semesaveCategory($request){
        self::$semestercategory = new SemesterCategory();
        self::$semestercategory->semester = $request->semester;
        self::$semestercategory->save();
    }
}
