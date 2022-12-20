<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepublicacionesRequest;
use App\Http\Requests\UpdatepublicacionesRequest;
use App\Models\publicaciones;

class PublicacionesController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepublicacionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepublicacionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function show(publicaciones $publicaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(publicaciones $publicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepublicacionesRequest  $request
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepublicacionesRequest $request, publicaciones $publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publicaciones  $publicaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(publicaciones $publicaciones)
    {
        //
    }
}
