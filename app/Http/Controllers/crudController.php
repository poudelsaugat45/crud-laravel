<?php

namespace App\Http\Controllers;

use App\crud;
use Illuminate\Http\Request;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('name');

        $cruds = Crud::where('name', 'like', '%' . $search . '%')
            ->orderBy('name')
            ->paginate(20);

        return view('crudapp.index', compact('cruds'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crudapp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $crud = new Crud;

        $crud->name = $request->name;
        $crud->sn   = $request->sn;

        $crud->save();
        return redirect()->action("crudController@create");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $crud = Crud::find($id);

        return view('crudapp.show')->with('crud', $crud);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Crud::find($id);
        return view('crudapp.edit')->with('crud', $crud);
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
        $crud = Crud::find($id);

        $crud->name = $request->name;
        $crud->sn   = $request->sn;

        $crud->save();
        return redirect()->route('crud.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Crud::destroy($id);
        return redirect()->route('crud.create');

    }
    public function __construct()
{
    $this->middleware('auth');
}

}

