<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use PDF;
use App\Models\OrderDetail;
use Hamcrest\Arrays\IsArrayContainingInAnyOrder;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $order= Order::with('user')->paginate(10);
       return view('admin.order.manage',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function storeprod($id)
    {
        $data= new Order;
        $data->user_id= Auth::user()->id;
        $data->code = date('Ymd-His').rand(10,99);
        $data->save();
        $detail= new OrderDetail;
        $detail->order_id= $data->id;
        $detail->product_id=$id;
        $prod= \App\Models\Product::findOrFail($id);
        $detail->quantity=1;
        $detail->price_total= $prod->price;
        $detail->save();
        $prod->stok= $prod->stok - 1;
        $prod->save();


        return back();
    }
    public function printSlip($id)
    {
        $data= Order::findOrFail($id);
        $detail= OrderDetail::where('order_id',$id)->with('product')->get();
        //dd($detail,$data);
        $pdf = PDF::loadView('admin.slip.index_penjualan', compact(['data','detail']));
        return $pdf->download('slip.pdf');    }
}
