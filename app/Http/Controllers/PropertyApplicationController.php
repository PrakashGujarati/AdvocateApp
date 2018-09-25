<?php

namespace App\Http\Controllers;

use App\PropertyApplication;
use Illuminate\Http\Request;
use Auth;

class PropertyApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Application.view');
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
            'property_case_id' => 'required',
            'sub_registrar' => 'required',
            'applicant_name' => 'required',
            'applicant_address' => 'required'
        ]);


        $user_id = Auth::user()->id;
        $request->merge(['user_id' => $user_id]);

        PropertyApplication::create($request->all());

        return response('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PropertyApplication  $propertyApplication
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyApplication $propertyApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PropertyApplication  $propertyApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyApplication $propertyApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PropertyApplication  $propertyApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'inward_no' => 'required',
            'inwarddate' => 'required',
            'property_owner_name' => 'required',
            'borrower_name' => 'required'
        ]);

        PropertyApplication::findOrFail($id)->update($request->all());

        return response('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PropertyApplication  $propertyApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        PropertyApplication::destroy($request->id);
        return response('Success');
    }

    public function getDataTable()
    {
        $propertyApplications = PropertyApplication::all();


        return DataTables::of($propertyApplications)
            ->addColumn('view',function ($propertyApplication){
                return '<button type="button" class="delete btn btn-sm btn-success" 
                data-application-id="'.$propertyApplication->id.'" data-token="'.csrf_token().'" >View</button>';
            })
            ->addColumn('edit',function ($propertyApplication){
                return '<button type="button" class="edit btn btn-sm btn-primary" 
                data-property-case-id="'.$propertyApplication->property_case_id.'" 
                data-sub-registrar="'.$propertyApplication->sub_registrar.'" 
                data-applicant-name="'.$propertyApplication->applicant_name.'" 
                data-applicant-address="'.$propertyApplication->applicant_address.'" 
                data-dastavej-details="'.$propertyApplication->dastavej_details.'" 
                data-dastavej-lakhiapnar="'.$propertyApplication->dastavej_lakhiapnar.'" 
                data-dastavej-lakhilenar="'.$propertyApplication->dastavej_lakhilenar.'" 
                data-property-address-office="'.$propertyApplication->property_address_office.'" 
                data-dastavej-date="'.$propertyApplication->dastavej_date.'" 
                data-search-year-from="'.$propertyApplication->search_year_from.'" 
                data-search-year-upto="'.$propertyApplication->search_year_upto.'" 
                data-search-application-no="'.$propertyApplication->search_application_no.'" 
                data-search-fee="'.$propertyApplication->search_fee.'" 
                data-actual-payment="'.$propertyApplication->actual_payment.'" 
                data-extra-expense="'.$propertyApplication->extra_expense.'" 
                data-payment-details="'.$propertyApplication->payment_details.'" 
                data-note="'.$propertyApplication->note.'" 
                data-user-id="'.$propertyApplication->user_id.'">Edit</button>';
            })
            ->addColumn('delete',function ($propertyApplication){
                return '<button type="button" class="delete btn btn-sm btn-danger" 
                data-delete-id="'.$propertyApplication->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['view','edit','delete'])
            ->make(true);
    }
}
