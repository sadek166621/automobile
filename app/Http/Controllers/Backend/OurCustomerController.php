<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurCustomer;
use Illuminate\Support\Carbon;
use Image;
use Session;
use DB;
class OurCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data['customer'] = DB::table('our_customers')->get();
        return view('backend.our-customer.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.our-customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'product_code' => 'required',
            'delivered' => 'required',
            'delivery_date' => 'required',
            'image' => 'required',
        ]);

        if($request->hasfile('image')){
            $image = $request->image;
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(2300,800)->save('upload/our-customer/'.$name_gen);
            $save_url = 'upload/our-customer/'.$name_gen;
        }else{
            $save_url = '';
        }

        $customer = new OurCustomer();
        $customer->product_code = $request->product_code;
        $customer->delivered = $request->delivered;
        $customer->delivery_date = $request->delivery_date;
        $customer->status = $request->status;
        $customer->image = $save_url;
        $customer->save();

        Session::flash('success','customer Inserted Successfully');
        return redirect()->route('our-customer.index');
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
        $customer =  DB::table('our_customers')->where('id',$id)->first();
        return view('backend.our-customer.edit',compact('customer'));
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
        $customer = OurCustomer::find($id);

        //customer Photo Update
        if ($request->file('image')) {
            try {
                if(file_exists($customer->image)){
                    unlink($customer->image);
                }
            } catch (Exception $e) {

            }
            $customer_img = $request->image;
            $customer_save = time().$customer_img->getClientOriginalName();
            $customer_img->move('upload/our-customer/',$customer_save);
            $customer->image = 'upload/our-customer/'.$customer_save;
        }else{
            $customer_save = '';
        }

        // customer update
        $customer->product_code = $request->product_code;
        $customer->delivered = $request->delivered;
        $customer->delivery_date = $request->delivery_date;
        $customer->status = $request->status;
        $customer->save();

        Session::flash('success','customer Inserted Successfully');
        return redirect()->route('our-customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('our_customers')->where('id',$id)->delete();
        return back();

    }
}
