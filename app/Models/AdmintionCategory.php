<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdmintionCategory extends Model
{
    use HasFactory;

    public static $admintioncategory;

    public static function admisaveCategory($request){
        self::$admintioncategory = new AdmintionCategory();
        self::$admintioncategory->depertmant_id = $request->depertmant_id;
        self::$admintioncategory->status = $request->status;
        self::$admintioncategory->save();
    }
}
