<?php

namespace App\Http\Controllers;

use App\Customer;
use DataTables;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ClientSide.Customer.view');
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
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'password' => 'required',
            'email' => 'required',
            'dob' => 'required'
        ]);

        Customer::create($request->all());

        return response('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'dob' => 'required'
        ]);

        if(empty($request->password))
        {
            Customer::findOrFail($id)->update($request->except('password'));
        }
        else {
            Customer::findOrFail($id)->update($request->all());
        }

        return response('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Customer::destroy($request->id);

        return response('Success');
    }

    public function getDataTable()
    {
        $customers = Customer::all();

        return DataTables::of($customers)
            ->addColumn('edit',function ($customer){
                return '<button type="button" class="edit btn btn-sm btn-primary" data-name="'.$customer->name.'" data-mobile="'.$customer->mobile.'" data-email="'.$customer->email.'" data-dob="'.$customer->dob.'" data-image="'.$customer->image.'" data-id="'.$customer->id.'">Edit</button>';
            })
            ->addColumn('delete',function ($customer){
                return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$customer->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['edit','delete'])
            ->make(true);
    }
}
