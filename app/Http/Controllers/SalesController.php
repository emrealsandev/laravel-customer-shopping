<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\sales;


class SalesController extends Controller
{
    public function index(){
        $customers = customer::all();
        $sales = sales::all();

        // Select içerisinde kullanmak için müşteri bilgileri ve satış tablosu için satış bilgileri gönderimi
        return view('sale',compact('customers','sales'));
    }

    public function createSale(Request $request){
        // Validation işlemi
        $data = $request->validate([
            'customer_id' => 'required',
            'price' => 'required|numeric',
            ]);
        //


        // Satış Kayıt işlemi
            $sale = sales::create([
                'customer_id' => $data['customer_id'],
                'price' => $data['price'],

            ]);
        return redirect()->route('sales.index');

    }
}
