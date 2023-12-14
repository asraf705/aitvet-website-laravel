<?php

namespace App\Http\Controllers;

use App\Models\DepertmentCategory;
use App\Models\FeesCategory;
use App\Models\Notise;
use App\Models\SemesterCategory;
use Illuminate\Http\Request;
use App\Models\Paymentstatus;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.home',[
            'notises' => Notise::all()
        ]);
    }

    public function about(){
        return view('front-end.about.about');
    }
    public function instructor(){
        return view('front-end.home.instructor');
    }

    public function notice(){
        return view('front-end.home.notice',[
            'notises' => Notise::all()
        ]);
    }

    public function singlenotise($titel){
        return view('front-end.home.single-notice',[
            'notises'=>Notise::where('titel',$titel)->first()
        ]);
    }

    public function admission(){
        return view('front-end.academic.admission');
    }

    public function sturegister(){
        return view('front-end.student.admissionfrom');
    }

    public function stulog(){
        return view('front-end.student.stulog');
    }

    public function curriculum(){
        return view('front-end.academic.curriculum');
    }

    public function gallery(){
        return view('front-end.academic.gallery');
    }

    public function paymentSystem(){
        return view('front-end.academic.paymentsystem');
    }

    public function paymentForm(){
        return view('front-end.student.paymentfrom',[
            'depertments' => DepertmentCategory::all(),
            'semesters' => SemesterCategory::all(),
            'fee' => FeesCategory::all()
        ]);
    }

    public function status(Request $request){

        $searchQuary =$request['search']??"";
        $paymentstatuses = "";
        if($searchQuary != $paymentstatuses){
            //where
            $paymentstatuses = Paymentstatus::where('roll','==',"$searchQuary")->get();
        }


        $data = compact('paymentstatuses','searchQuary');
        return view('front-end.student.paymentstatus',[
            'paymentstatuses' => Paymentstatus::all(),
        ])->with($data);


    }



}
