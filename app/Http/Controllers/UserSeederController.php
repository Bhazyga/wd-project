<?php

namespace App\Http\Controllers;

use App\Models\UserSeeder;
use App\Http\Requests\StoreUserSeederRequest;
use App\Http\Requests\UpdateUserSeederRequest;

class UserSeederController extends Controller
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
     * @param  \App\Http\Requests\StoreUserSeederRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserSeederRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserSeeder  $userSeeder
     * @return \Illuminate\Http\Response
     */
    public function show(UserSeeder $userSeeder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserSeeder  $userSeeder
     * @return \Illuminate\Http\Response
     */
    public function edit(UserSeeder $userSeeder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserSeederRequest  $request
     * @param  \App\Models\UserSeeder  $userSeeder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserSeederRequest $request, UserSeeder $userSeeder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserSeeder  $userSeeder
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserSeeder $userSeeder)
    {
        //
    }
}
