<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Albergue;

class AlberguesController extends Controller
{
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
    public function create()
    {
        $albergue = new Albergue;
        return view("albergues.create", ["albergue" => $albergue]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $albergue = new albergue;

        $albergue->name = $request->name;
        $albergue->address = $request->address;
        $albergue->district = $request->district;
        $albergue->encargado = $request->encargado;
        $albergue->DNI = $request->DNI;
        $albergue->movil = $request->movil;
        $albergue->email = $request->email;
        $albergue->cantidad = $request->cantidad;
        $albergue->desparasit = $request->desparasit;
        $albergue->vacunas = $request->vacunas;

        if($albergue->save()){
            $albergue->sendMail();
            return redirect("/adopta");
        }else{
            return view("albergues.create", ["albergue" => $albergue]);
        }
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
    public function edit($id)
    {
        //
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
        //
    }
}
