<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserPost;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct() 
    {
        // middleware in construct
        $this->middleware('check.user')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserPost $request)
    {

        $validated = $request->validated();

        // if ($validated == false)
        // {
        //     return view('user.redirect');
        // }

        $name = $request->input('name');

        $password = $request->input('password');

        print_r($validated);
        return view('user.store', ['name' => $name, 'password' => $password, 'validated' => $validated]);
        
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
    public function edit(Request $request, $id)
    {
        // get the request route
        $path = $request->path();

        // return view with parameter
        return view('user.edit', ['id' => $id, 'path' => $path]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('user.destroy', ['id' => $id]);
    }
}
