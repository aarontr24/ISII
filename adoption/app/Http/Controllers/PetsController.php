<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pet;
use App\PetImage;
use Illuminate\Support\Facades\Auth;

use Illuminate\Database\Eloquent\SoftDeletes;

class PetsController extends Controller
{
    public function __construct(){
        $this->middleware("auth",["except" => "show"]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pets = Pet::all();
        /**dd($pets); where('user_id',Auth::user()->id)->get()*/
        return view("pets.index",["pets" => $pets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pet = new Pet;
        return view("pets.create",["pet" => $pet]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hasFile = $request->hasFile('avatar') && $request->avatar->isValid();
        $hasFile1 = $request->hasFile('img1') && $request->img1->isValid();
        $hasFile2 = $request->hasFile('img2') && $request->img2->isValid();
        $hasFile3 = $request->hasFile('img3') && $request->img3->isValid();

        $pet = new Pet;

        $pet->name = $request->name;
        $pet->birthday = $request->birthday;
        $pet->date_aux = $request->date_aux;
        $pet->url_video = $request->url_video;
        $pet->tipo = $request->tipo;
        $pet->pelo = $request->pelo;
        $pet->activity = $request->activity;
        $pet->space = $request->space;
        $pet->alone = $request->alone;
        $pet->size = $request->size;
        $pet->gender = $request->gender;
        $pet->age = $request->age;
        $pet->description = $request->description;
        $pet->sterilized = $request->sterilized;
        $pet->vaccine = $request->vaccine;
        $pet->rage_vac = $request->rage_vac;
        $pet->dewormed = $request->dewormed;
        $pet->user_id = Auth::user()->id;

        if($hasFile){
            $extA = $request->avatar->extension();
        }
        if($hasFile1){
            $ext1 = $request->img1->extension();
        }
        if($hasFile2){
            $ext2 = $request->img2->extension();
        }
        if($hasFile3){
            $ext3 = $request->img3->extension();
        }
            
        if($pet->save()){
            if($hasFile){
                PetImage::createPetImage($pet->id,"$pet->id.$extA");
                $request->avatar->storeAs('images',"$pet->id.$extA");
            }
            if($hasFile1){
                PetImage::createPetImage($pet->id,"$pet->id"."-1".".$ext1");
                $request->img1->storeAs('images',"$pet->id-1.$ext1");
            }
            if($hasFile2){
                PetImage::createPetImage($pet->id,"$pet->id"."-2".".$ext2");
                $request->img2->storeAs('images',"$pet->id-2.$ext2");
            }
            if($hasFile3){
                PetImage::createPetImage($pet->id,"$pet->id"."-3".".$ext3");
                $request->img3->storeAs('images',"$pet->id-3.$ext3");
            }
            return redirect("/pets");
        }else{
            return view("pets.create", ["pet" => $pet]);
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
        $pet = Pet::find($id);

        return view("pets.show",["pet" => $pet]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pet = Pet::find($id);
        return view("pets.edit",["pet" => $pet]);
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
        $hasFile = $request->hasFile('avatar') && $request->avatar->isValid();
        $hasFile1 = $request->hasFile('img1') && $request->img1->isValid();
        $hasFile2 = $request->hasFile('img2') && $request->img2->isValid();
        $hasFile3 = $request->hasFile('img3') && $request->img3->isValid();

        $pet = Pet::find($id);

        $pet->name = $request->name;
        $pet->birthday = $request->birthday;
        $pet->date_aux = $request->date_aux;
        $pet->url_video = $request->url_video;
        $pet->tipo = $request->tipo;
        $pet->pelo = $request->pelo;
        $pet->activity = $request->activity;
        $pet->space = $request->space;
        $pet->alone = $request->alone;
        $pet->size = $request->size;
        $pet->gender = $request->gender;
        $pet->age = $request->age;
        $pet->description = $request->description;
        $pet->sterilized = $request->sterilized;
        $pet->vaccine = $request->vaccine;
        $pet->rage_vac = $request->rage_vac;
        $pet->dewormed = $request->dewormed;
        $pet->user_id = Auth::user()->id;

        if($hasFile){
            $extA = $request->avatar->extension();
        }
        if($hasFile1){
            $ext1 = $request->img1->extension();
        }
        if($hasFile2){
            $ext2 = $request->img2->extension();
        }
        if($hasFile3){
            $ext3 = $request->img3->extension();
        }
            
        if($pet->save()){
            if($hasFile){
                PetImage::createPetImage($pet->id,"$pet->id.$extA");
                $request->avatar->storeAs('images',"$pet->id.$extA");
            }
            if($hasFile1){
                PetImage::createPetImage($pet->id,"$pet->id"."-1".".$ext1");
                $request->img1->storeAs('images',"$pet->id-1.$ext1");
            }
            if($hasFile2){
                PetImage::createPetImage($pet->id,"$pet->id"."-2".".$ext2");
                $request->img2->storeAs('images',"$pet->id-2.$ext2");
            }
            if($hasFile3){
                PetImage::createPetImage($pet->id,"$pet->id"."-3".".$ext3");
                $request->img3->storeAs('images',"$pet->id-3.$ext3");
            }
            return redirect("/pets");
        }else{
            return view("pets.edit", ["pet" => $pet]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        Pet::destroy($id);
        return redirect("/pets");
    }
}
