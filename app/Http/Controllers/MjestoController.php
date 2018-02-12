<?php

namespace App\Http\Controllers;

use App\Mjesto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Validator;
use Session;
use Illuminate\View\View;

class MjestoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Izlistava SVE Županije
     *
     * @return Response
     */
    public function index()
    {
         $mjesto= Mjesto::all()->reverse(); //->paginate(15); //TODO
        return view("mjesto.index",compact('mjesto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View('mjesto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        
      $validator = Validator::make($request->all(), [
            'pbr' => 'required|digits:5',
            'naziv' => 'required|between:2,40',
            'zupanija_id' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()
                        ->route('Mjesto.create')
                        ->withErrors($validator)
                        ->withInput();
        }
        else{
        $m=new Mjesto;
        $m->naziv=Input::get('naziv');
        $m->pbr=Input::get('pbr');
        $m->zupanija_id=Input::get('zupanija_id');
        $m->save();   
        
        Session::flash('message','Mjesto je uspješno dodano');
        return redirect()->route('Mjesto.create');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
