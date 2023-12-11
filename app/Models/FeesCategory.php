<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesCategory extends Model
{
    use HasFactory;

    public static $feescategory;
    public static function feesaveCategory($request){
        self::$feescategory = new FeesCategory();
        self::$feescategory->fees_type = $request->fees_type;
        self::$feescategory->save();
    }
}
