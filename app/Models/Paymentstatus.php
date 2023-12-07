<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paymentstatus extends Model
{
    use HasFactory;

    public static $paymentstatus;
    public static function saveInfo($request){
        self::$paymentstatus = new Paymentstatus();
        self::$paymentstatus->depertment = $request->depertment;
        self::$paymentstatus->semester = $request->semester;
        self::$paymentstatus->roll = $request->roll;
        self::$paymentstatus->paytype = $request->paytype;
        self::$paymentstatus->amount = $request->amount;
        self::$paymentstatus->bkashnum = $request->bkashnum;
        self::$paymentstatus->txnid = $request->txnid;
        self::$paymentstatus->save();

    }

    public static function updateInfo($request,$id){
        self::$paymentstatus = Paymentstatus::find($id);
        self::$paymentstatus->depertment = $request->depertment;
        self::$paymentstatus->semester = $request->semester;
        self::$paymentstatus->roll = $request->roll;
        self::$paymentstatus->paytype = $request->paytype;
        self::$paymentstatus->amount = $request->amount;
        self::$paymentstatus->bkashnum = $request->bkashnum;
        self::$paymentstatus->txnid = $request->txnid;
        self::$paymentstatus->save();
    }



}
