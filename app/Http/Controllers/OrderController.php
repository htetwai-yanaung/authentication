<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function order($id){
        Order::create([
            'product_id' => $id
        ]);
        return view('mainPage');
    }
}
