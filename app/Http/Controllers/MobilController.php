<?php

namespace App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mobil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'merk' => 'required',
            'type' => 'required',
            'nopol' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        $mobil = new Mobil();
        $mobil->merk = $request->merk;
        $mobil->type = $request->type;
        $mobil->nopol = $request->nopol;
        $mobil->stok = $request->stok;
        $mobil->harga = $request->harga;
        $mobil->save();
        return redirect()->route('mobil.index')->with('success', 'Task Created Successfully!');

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
        $mobil = Mobil::findOrFail($id);
        return view('mobil.show', compact('mobil'));
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
        $mobil = Mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
        
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
        $validated = $request->validate([
            'merk' => 'required',
            'type' => 'required',
            'nopol' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);
        $mobil = Mobil::findOrFail($id);
        $mobil->merk = $request->merk;
        $mobil->type = $request->type;
        $mobil->nopol = $request->nopol;
        $mobil->stok = $request->stok;
        $mobil->harga = $request->harga;
        $mobil->save();
        return redirect(route('mobil.index'))->with('success', 'Data berhasil dibuat!');
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
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->route('mobil.index')->with('success', 'Data berhasil dihapus!');
    }
}
