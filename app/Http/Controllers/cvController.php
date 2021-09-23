<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cv;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;

class cvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('CvBuilder');
    }

    protected function storeImage($img)
    {
        if (!$img) {
            return null;
        }
        $image   = ImageManagerStatic::make($img)->encode('jpg');
        $name  = Str::random() . '.jpg';
        Storage::disk('public')->put($name, $image);
        return 'storage/'.$name;
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

        $request->validate([
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required ',
            'address' => 'required ',
            'dob' => 'required ',
            'photo' => 'required ',
            'about' => 'required ',

        ]);
        cv::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'birth_date' => $request->dob,
            'photo' => $this->storeImage($request->photo),
            'about' => $request->about,
        ]);
        dd("sucessfully!");
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
