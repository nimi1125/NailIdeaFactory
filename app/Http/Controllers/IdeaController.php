<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('idea.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('idea.record');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('idea.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('idea.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
 * 
 */
    public function myidea()
    {
        return view('idea.myidea');
    }
}
