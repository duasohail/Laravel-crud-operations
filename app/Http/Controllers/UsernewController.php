<?php

namespace App\Http\Controllers;

use App\Models\usernew;
use Illuminate\Http\Request;
use App\Http\Controllers\redirect;
use Illuminate\Support\Facades\Redirect as FacadesRedirect;

class UsernewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        return usernew::all();
    }
    public function getList()
    {
        $data = usernew::all();
        return view('welcome', ['members'=>$data]);
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
        $user = new usernew;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return Redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\usernew  $usernew
     * @return \Illuminate\Http\Response
     */
    public function show(usernew $usernew)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\usernew  $usernew
     * @return \Illuminate\Http\Response
     */
    public function edit(usernew $usernew)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\usernew  $usernew
     * @return \Illuminate\Http\Response
     */
    public function editPage($id)
    {
        $data = usernew::find($id);
        return view('edit',['data'=>$data]);
    }
    public function update(Request $request)
    {
        $data = usernew::find($request->id);
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=$request->password;
        $data->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\usernew  $usernew
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =usernew::find($id);
        $data->delete();
        return redirect('/');
    }
}
