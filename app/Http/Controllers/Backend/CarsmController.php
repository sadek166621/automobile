<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Carm;
use Session;


class CarsmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carsm = Carm::latest()->get();
    	return view('backend.model.model_view',compact('carsm'));
    }

    public function getCarsByBrand($brand_id)
    {
        $cars = Carm::where('brand_id', $brand_id)->get();
        return response()->json($cars);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::latest()->get();
        return view('backend.model.model_add',compact('brands'));
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
            'name' => 'required',
        ]);
        if($request->status == Null){
            $request->status = 0;
        }
        $model = Carm::create([
            'brand_id'=> $request->brand_id,
            'name'=> $request->name,
            'status'=> $request->status,
        ]);
		Session::flash('success','Model Inserted Successfully');
		return redirect()->route('carsm.all');
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

        $carsm = Carm::findOrFail($id);
        $brands = Brand::latest()->get();
    	return view('backend.model.model_add',compact('carsm','brands'));
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
        $carsm = Carm::findOrFail($id);

        if($request->status == Null){
            $request->status = 0;
        }
        $carsm->update([
            'brand_id'=> $request->brand_id,
            'name'=> $request->name,
            'status'=> $request->status,
        ]);

        Session::flash('success','Model Updated Successfully');
		return redirect()->route('carsm.all');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carsm = Carm::findOrFail($id);
        $carsm->delete();
        Session::flash('success','Model Deleted Successfully');
		return redirect()->route('carsm.all');

    }
}
