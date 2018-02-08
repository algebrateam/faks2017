<?php

namespace App\Http\Controllers;

use App\Mjesto;
use App\Zupanija;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\View\View;
use function view;

class ZupanijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         $z= Zupanija::all()->reverse();
        return view("zupanija.index",['z' => $z]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View('zupanija.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $zupanija=new Zupanija;
        $zupanija->naziv=Input::get('naziv');
        $zupanija->save();
        
        
        //do verzije 5.4
        //return Redirect::to('Zupanija/create');
        
        // od verzije 5.5
        return redirect()->route('Zupanija.create');
    }

    /**
     * Display the specified resource.
     * Ovo vraća samo JEDNU županiju i sve njene detalje
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
           $z= Zupanija::find($id);
           
           // Ovo radi ali nije ispravan način, treba napraviti relaciju
           // belongsTo i HasMany
           /*
           $mjestoizzupanije=Mjesto::where('zupanija_id', $z->id)
               ->orderBy('naziv', 'desc')
               ->take(100)
               ->get();
            */
           $mjestoizzupanije=$z->mjesta()->get();  
        return view("zupanija.show",['z' => $z,'m'=>$mjestoizzupanije]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $zupanija=Zupanija::find($id);
        //dd($zupanija);
        return View('zupanija.edit')->with('zupanija',$zupanija);
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
        $zupanija=Zupanija::find($id);
        $zupanija->naziv=Input::get('naziv');
        $zupanija->save();
        return redirect()->route('Zupanija.edit', ['id' =>$zupanija->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $zupanija=Zupanija::find($id);
        $zupanija->delete();
        return redirect()->route('Zupanija.index');
    }
}
