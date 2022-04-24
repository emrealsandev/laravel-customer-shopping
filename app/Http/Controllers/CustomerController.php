<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function index(){
        $customers = customer::all();
        return view('create_customer',compact('customers'))->with('success','Kullanıcı Başarıyla Oluşturuldu');
    }

    public function createCustomer(Request $request){
        // Validation işlemi
        $data = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            ]);
        //


        // Müşteri Kayıt işlemi
        $customer = customer::create([
            'name' => $data['name'],
            'surname' => $data['surname'],

        ]);

        return redirect()->route('customer.index')->with('success','Kullanıcı Başarıyla Oluşturuldu');
    }
}
