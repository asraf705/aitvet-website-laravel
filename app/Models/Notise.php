<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Notise extends Model
{
    use HasFactory;

    public static  $notise,$image,$slug,$imageNewName,$dir,$imgUrl;

    public static function saveInfo($request){
        self::$notise = new Notise();
        self::$notise->titel = self::makeSlug($request);
        self::$notise->image = self::makeImgUrl($request);
        self::$notise->save();
    }

    private static function makeSlug($request){
        if ($request->titel){
            self::$slug = Str::slug($request->titel);
        }
        return self::$slug;
    }

    private static function makeImgUrl($request){
        self::$image = $request->file('image');
        self::$imageNewName = rand().'.'.self::$image->extension();
        self::$dir = 'back-end-assets/noitse-image/';
        self::$imgUrl = self::$dir.self::$imageNewName;
        self::$image->move(self::$dir,self::$imageNewName);
        return self::$imgUrl;
    }

    public static function updateInfo($request,$id){
        self::$notise = Notise::find($id);
        self::$notise->titel = $request->titel;
        if($request->file('image')){
            if(self::$notise->image){
                if (file_exists(self::$notise->image)){
                    unlink(self::$notise->image);
                }
            }
            self::$notise->image = self::makeImgUrl($request);
        }

        self::$notise->save();
    }




}
