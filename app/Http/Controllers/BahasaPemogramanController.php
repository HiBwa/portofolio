<?php

namespace App\Http\Controllers;

use App\Models\BahasaPemograman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BahasaPemogramanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = BahasaPemograman::where('user_id', Auth::id())->orderBy('bahasa_pemograman', 'asc')->get();
        return view('dashboard.bahasa-pemograman.index', [
            'title' => 'Bahasa Pemograman',
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.bahasa-pemograman.create', [
            'title' => 'Create Bahasa Pemograman',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'bahasa_pemograman' => 'required',
        ]);

        BahasaPemograman::create([
            'user_id' => Auth::id(),
            'bahasa_pemograman' => $request->bahasa_pemograman,
        ]);
        return redirect()->back()->with(['success' => 'Data Berhasil Dibuat']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = BahasaPemograman::find($id);
        return view('dashboard.bahasa-pemograman.edit', [
            'title' => 'Update Bahasa Pemograman',
            'data' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $this->validate($request, [
            'bahasa_pemograman' => 'required',
        ]);
        BahasaPemograman::find($id)->update([
            'user_id' => Auth::id(),
            'bahasa_pemograman' => $request->bahasa_pemograman,
        ]);

        return redirect()->route('bahasa-pemograman.index')->with(['success' => 'Data Berhasil Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BahasaPemograman::find($id)->delete();
        return redirect()->route('bahasa-pemograman.index')->with(['success' => 'Data Berhasil Dihapus']);
    }
}
