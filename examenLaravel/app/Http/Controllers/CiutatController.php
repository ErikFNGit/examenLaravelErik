<?php

namespace App\Http\Controllers;

use App\Models\Ciutat;
use App\Http\Requests\StoreCiutatRequest;
use App\Http\Requests\UpdateCiutatRequest;
use Illuminate\Http\Request;

class CiutatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCiutatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciutat $ciutat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ciutat $ciutat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCiutatRequest $request, Ciutat $ciutat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciutat $ciutat)
    {
        //
    }
}
