<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;

class VendorController extends Controller
{

    public function index()
    {
        $vendors = Vendor::all();;

        return response()->json(array(
            'status' => 'success',
            'pages' => $vendors->toArray()),
            200
        );
        //return Vendor::all();
    }


    public function store(Request $request)

    {
        $vendor = Vendor::create($request->all());

        return response()->json($vendor, 201);
        //return Vendor::create($request->all() );
    }

    public function show(Vendor $vendor)
    {
        return response()->json(array(
            'status' => 'success',
            'pages' => $vendor->toArray()),
            200
        );
    }

    public function update(Request $request, Vendor $vendor)
    {
        $vendor->update($request->all());

        return response()->json($vendor, 200);
    }


    public function destroy(Vendor $vendor)
    {
        $vendor->delete();
        return response()->json(null , 204);
    }
}
