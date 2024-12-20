<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Journal;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $journals = Journal::all();
        foreach($journals as $journal){
            $entry = substr($journal->entry, 0, 80);
            $journal->entry = $entry;

        }
        return view('home', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    /* public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     */
    /* public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $journal = Journal::find($id);
        return view('show', compact('journal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /* public function edit(string $id)
    {
        //
    }
 */
    /**
     * Update the specified resource in storage.
     */
   /*  public function update(Request $request, string $id)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     */
   /*  public function destroy(string $id)
    {
        //
    } */
}
