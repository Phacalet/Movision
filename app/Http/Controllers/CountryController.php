<?php


namespace App\Http\Controllers;
use App\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class CountryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    protected $redirectTo = '/country';


    public function __construct()
    {
        $this->middleware('auth');
/* 
        if (Gate::denies('manage-users')) {
            return redirect()->route('location')->with('Warning','Vous n\'êtes pas habilité à paramétrer les pays !');
        } */


        
    }

   /**
     * Get a validator for an incoming keyin request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */ 
    protected function validator(array $data)
    {
        return Validator::make($data, [  
            'name' =>'required|string|min:3|max:225',
            'status' => 'required|integer|max:1',             
        ]);
    }

  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        \Carbon\Carbon::setLocale('fr');
        $countries = Country::all();
        return view('location')->with('countries',$countries);
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
     * @param  \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {   
        //
        return view('country.edit',[
            'name'=>$name,
            'status'=>$status,
            'user_id'=>$user_id,
            'zone_1'=>$zone_1
        ]);
        
    }

    /**
     * Update the specified resource in storage.
     *
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
        
       if (Gate::denies('delete-country')) {
        return redirect()->route('country.index');
       }

        $country->delete();
        return redirect()->route('country.index')->with('danger','Suppression effectuée avec succès !');
    }
}
