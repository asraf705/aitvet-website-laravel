<?php

namespace App\Http\Controllers;


use App\Models\DepertmentCategory;
use App\Models\FeesCategory;
use App\Models\SemesterCategory;
use Illuminate\Http\Request;
use App\Models\Paymentstatus;
use DB;

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

    public function paymentDetials(Request $request){
        $search = $request['search']??"";
        if ($search != ""){
            //where
            $paymentstatuses = Paymentstatus::where('roll','like',"$search")->get();

        }
        else{
            $paymentstatuses = Paymentstatus::all();
        }

        $data = compact('paymentstatuses','search');
        return view('admin.acount-manag.payment-details')->with($data);
    }


    public function paymentPrint(Request $request){

        return view('admin.acount-manag.payment-print',[
            'depertments' => DepertmentCategory::all(),
            'semesters' => SemesterCategory::all(),
            'fees' => FeesCategory::all(),
            'paymentstatuses' => Paymentstatus::all()
        ]);

    }

}
