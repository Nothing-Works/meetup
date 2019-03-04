<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::component('EmailEditor');
    }

    public function all()
    {
        return Email::all()->pluck('id');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    public function store()
    {
        $attributes = request()->validate([
            'json' => 'required',
            'html' => 'required',
        ]);
        Email::create($attributes);
    }

    public function show(Email $email)
    {
        return $email;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Email $email
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Email $email)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Email               $email
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Email $email)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Email $email
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Email $email)
    {
    }
}
