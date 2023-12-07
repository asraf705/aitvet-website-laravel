<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Paymentstatus;

class DashboardController extends Controller
{
    public function index(Request $request){
        $search = $request['search']??"";
        if ($search != ""){
            //where
            $paymentstatuses = Paymentstatus::where('roll','=',"$search")->get();
        }
        else{
            $paymentstatuses = Paymentstatus::all();
        }

        $data = compact('paymentstatuses','search');
        return view('admin.dashboard.dashboard')->with($data);

    }



    public function paymentPrint(Request $request){


        $search = $request['search']??"";
        if ($search != ""){
            //where
            $paymentstatuses = Paymentstatus::where('depertment','=',"%$search%")->get();
            $paymentstatuses = Paymentstatus::orwhere('semester','=',$search)->get();
            $paymentstatuses = Paymentstatus::orwhere('roll','=',$search)->get();
            $paymentstatuses = Paymentstatus::orwhere('paytype','=',"%$search")->get();

        }
        else{
            $paymentstatuses = Paymentstatus::all();
        }

        $data = compact('paymentstatuses','search');
        return view('admin.acount-manag.payment-print')->with($data);





    }

}
