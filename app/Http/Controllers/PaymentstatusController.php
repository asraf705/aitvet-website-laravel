<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paymentstatus;

class PaymentstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public static $paymentstatus;
    public function index(Request $request)
    {

        $searchQuary =$request['search']??"";
        $paymentstatuses = "";
        if($searchQuary != $paymentstatuses){
            //where
            $paymentstatuses = Paymentstatus::where('roll','=',"$searchQuary")->get();
        }

        $data = compact('paymentstatuses','searchQuary');
        return view('front-end.student.paymentstatus',[
            'paymentstatuses' => Paymentstatus::all(),
        ])->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('front-end.student.paymentfrom');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Paymentstatus::saveInfo($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        self::$paymentstatus = Paymentstatus::find($id);
        if (self::$paymentstatus->status == 1) {
            self::$paymentstatus->status = 0;
        }
        elseif(self::$paymentstatus->status == 0){
            self::$paymentstatus->status = 1;
        }
        self::$paymentstatus->save();
        return back();

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.acount-manag.payment-edit',[
            'paymentstatuses' => Paymentstatus::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Paymentstatus::updateInfo($request,$id);
        return redirect(route('paymentstatuses.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        self::$paymentstatus = Paymentstatus::find($id);
        self::$paymentstatus->delete();
        return back();
    }
}
