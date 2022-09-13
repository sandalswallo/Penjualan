<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelian = Pembelian::all();
        return view('pembelian.index',compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembelian = pembelian::all();
      return view('pembelian.add',compact('pembelian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'barang_id'=> 'required|numeric',
            'tanggal'=> 'required|numeric',
            'jumlah'=> 'required|numeric|min:1',
            'harga'=> 'required|numeric',
            'barang'=> 'required|max:255',
             
             ]);
     
             $pembelian = Pembelian::create($request->all());
             return redirect ('pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $pembelian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = Pembelian::find($id);
        return view('pembelian.edit', compact('pembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembelian $pembelian)
    {
        $validate = $request->validate([
            'barang_id'=> 'required',
            'tanggal'=> 'required|numeric',
            'jumlah'=> 'required|numeric|min:0',
            'harga'=> 'required|numeric',
            'barang' => 'required|max:255',
             
             ]);
     
             $pembelian->update([
                'barang_id' => $request -> barang_id,
                'tanggal' => $request -> tanggal,
                'jumlah' => $request -> jumlah,
                'harga' => $request -> harga,
                'barang' => $request -> barang,
                
             ]);
             return redirect('pembelian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembelian  $pembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();

        return redirect('pembelian');
    }
}
