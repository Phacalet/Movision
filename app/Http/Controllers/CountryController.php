<?php

namespace App\Http\Controllers;
use App\City;
use App\Country;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;

class CountryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */

    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /**
     * Get a validator for an incoming keyin request.
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
    */ 
    protected function validator(Request $data)
    {
        return Validator::make($data, [  
            'name' =>'required|string|min:3|max:225',
            'status' => 'required|integer|max:1',             
        ]);
    }



     /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Carbon\Carbon::setLocale('fr');
        $cities = City::with('country')->get();
        $countries = Country::all();

        return view('location')->with('countries',$countries)->with('cities',$cities);
    }
    

    /**
     * Create a new country instance after a valid registration.
     * @param  array  $data
     * @return \App\Country
     */
    protected function create(Request $data)
    {
     //  $userId = Auth::id();  
        $userId = 1;
        $country = Country::create([
            'name' => $data['name'],
            'status' => $data['status'],
            'zone_1'=>'App data',
            'user_id'=>$userId,
        ]);
        //return redirect()->back()->with('success',$data['name'].' a été ajouté à la liste des pays !');
         return redirect('country');
    }

    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            ['name'=>'required|min:3'],
            ['name.required'=>'Le champs pays est obligatoire', 'name.min'=>'Vous devez saisir 3 caractères au moins']
        );

        Country::create([
            'name' => $request->name,
            'status' => $request->status,
            'zone_1'=>'App data',
            'user_id'=>auth()->id(),]
        );
        return redirect('country')->with('success',$request['name'].' a été ajouté à la liste des pays !');
    }



    /**
     * Display the specified resource.
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {   
        //
        return view('country.edit',[
            'name'=>$country->name,
            'status'=>$country->status,
            'user_id'=>$country->user_id,
            'zone_1'=>$country->zone_1
        ]);
        
    }


    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {    
       $country->name = $request->name;
       $country->status = $request->status;
       $country->user_id = $request->user_id;
       $country->zone_1 = $request->zone_1;

       $country->save();
       return redirect()->route('country.index')->with('success','Modification pris en compte !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        
       
        $country->delete();
        return redirect()->back()->with('danger','Suppression effectuée avec succès !');
    }
}
