<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ficha;
use App\Pet;

class FichasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ficha->sendMail();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //Mail::to("contender3d@gmail.com")->send(new FichaAdoption);
        $ficha = new Ficha;
        return view("fichas.create", ["ficha" => $ficha, "id" => $id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ficha = new Ficha;

        $ficha->pet_id = $request->pet_id;
        $ficha->names = $request->names;
        $ficha->lastname = $request->lastname;
        $ficha->names = $request->names;
        $ficha->address = $request->address;
        $ficha->district = $request->district;
        $ficha->movil = $request->movil;
        $ficha->phone = $request->phone;
        $ficha->birthday = $request->birthday;
        $ficha->DNI = $request->DNI;
        $ficha->email = $request->email;
        $ficha->estcivil = $request->estcivil;
        $ficha->ocupacion = $request->ocupacion;
        $ficha->labora = $request->labora;

        if($ficha->save()){
            $ficha->sendMail();
            return redirect("/adopta");
        }else{
            return view("fichas.create", ["ficha" => $ficha]);
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
