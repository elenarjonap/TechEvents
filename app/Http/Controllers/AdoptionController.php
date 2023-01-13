<?php

namespace App\Http\Controllers;

use App\Models\Adoption;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdoptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $adoptions = Adoption::get();
        $adoptionsold
        $adoptionsnew
        $adoptionsinscribe
        //var_dump($adoptions);
        return view('home', compact('adoptions', 'adoptionsold', 'adoptionsnew'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createAdoption');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adoption = request()->except('_token');
        Adoption::create($adoption);
        return redirect()->route('home');
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
        $adoption = Adoption::find($id);
        return view ('showAdoption', compact('adoption'));
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
        $adoption = Adoption::find($id);
        return view ('editAdoption', compact('adoption'));
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
        $adoption = request()->except('_token', '_method');
        Adoption::where('id', '=', $id)->update($adoption);
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Adoption::destroy($id);
        return redirect()->route('home');
    }

    public function inscribe($id)
    {
        $adoption = Adoption::find($id);
        $user = User::find(Auth::id());

        $user->adoption()->attach($adoption);  
        
        return redirect()->route('home');
    }

    public function unscribe($id)
    {
        $adoption = Adoption::find($id);
        $user = User::find(Auth::id());

        $user->adoption()->detach($adoption);  
        
        return redirect()->route('home');
    }
}
