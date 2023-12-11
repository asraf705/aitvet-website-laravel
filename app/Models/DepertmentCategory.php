<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepertmentCategory extends Model
{
    use HasFactory;

    public static $depertmentcategory;

    public static function deptsaveCategory($request){
        self::$depertmentcategory = new DepertmentCategory();
        self::$depertmentcategory->depertmant_name = $request->depertmant_name;
        self::$depertmentcategory->save();
    }

    public static function deptupdateCategory($request){
        self::$depertmentcategory = DepertmentCategory::find($request->id);
        self::$depertmentcategory->depertmant_name = $request->depertmant_name;
        self::$depertmentcategory->save();
    }


}
