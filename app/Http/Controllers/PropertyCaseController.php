<?php

namespace App\Http\Controllers;

use App\PropertyCase;
use Illuminate\Http\Request;
use DataTables;

class PropertyCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Case.TitleClearance.view');
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
            'inward_no' => 'required',
            'inwarddate' => 'required',
            'property_owner_name' => 'required',
            'borrower_name' => 'required'
        ]);


        PropertyCase::create($request->all());

        return response('success');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyCase $propertyCase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyCase $propertyCase)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
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

        PropertyCase::findOrFail($id)->update($request->all());

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
        PropertyCase::destroy($request->id);
        return response('Success');
    }

    public function getDataTable()
    {
        $propertyCases = PropertyCase::all();

        return DataTables::of($propertyCases)
            ->addColumn('view',function ($propertyCase){
                return '<button type="button" class="delete btn btn-sm btn-success" data-delete-id="'.$propertyCase->id.'" data-token="'.csrf_token().'" >View</button>';
            })
            ->addColumn('edit',function ($propertyCase){
                return '<button type="button" class="edit btn btn-sm btn-primary" 
                data-inward-no="'.$propertyCase->inward_no.'" 
                data-inwarddate="'.$propertyCase->inwarddate.'" 
                data-property-owner-name="'.$propertyCase->property_owner_name.'" 
                data-borrower-name="'.$propertyCase->borrower_name.'" 
                data-bank-id="'.$propertyCase->bank_id.'" 
                data-bank-manager-name="'.$propertyCase->bank_manager_name.'" 
                data-bank-branch="'.$propertyCase->bank_branch.'" 
                data-bank-facilities="'.$propertyCase->bank_facilities.'" 
                data-property-description="'.$propertyCase->property_description.'" 
                data-id="'.$propertyCase->id.'">Edit</button>';
            })
            ->addColumn('delete',function ($propertyCase){
                return '<button type="button" class="delete btn btn-sm btn-danger" data-delete-id="'.$propertyCase->id.'" data-token="'.csrf_token().'" >Delete</button>';
            })
            ->rawColumns(['view','edit','delete'])
            ->make(true);
    }
}
