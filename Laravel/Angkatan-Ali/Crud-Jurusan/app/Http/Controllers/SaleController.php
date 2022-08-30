<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::all();

        return view ('sale.index', compact('sales'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        //batasi  hak akses
        // $this->authorize('create',Sale::class);

        // $validateData = $request->validate([
        //     'nama'=> 'required',
        //     'nama_jurusan'=> 'required',
        //     'nama_dekan'=> 'required'
        // ]);

        // Sale::create($validateData);
        // return redirect()->route('sales.index')->with('pesan','Sale '.$request->nama_jurusan .' berhasil ditambahkan');

        //New

        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }

        Sale::create($input);

        return redirect()->route('sales.index')
                        ->with('success','Product created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        // $this->authorize('update',$sale);

        $sale = Sale::find($sale->id);

        return view ('sale.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $sale = Sale::find($id);
        return view ('sale.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {

        // $this->authorize('update',$sale);

        // $sale = Sale::find($sale->id);

        // $validateData = $request->validate([
        //     'nama'=> 'required',
        //     'nama_jurusan'=> 'required',
        //     'nama_dekan'=> 'required'
        // ]);

        // $sale->update($validateData);
        // return redirect()->route('sales.show',$sale->id)->with('pesan','Jurusan '.$request->nama_jurusan .' berhasil diUpdate');

        $request->validate([
            'name' => 'required',
            'detail' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $sale->update($input);

        return redirect()->route('sales.index')
                        ->with('success','Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        // $this->authorize('delete',$sale);

        // Sale::find($sale->id)->delete();

        // return redirect()->route('sales.index')->with('pesanDelete','Sale berhasil dihapus');

        $sale->delete();

        return redirect()->route('sales.index')
                        ->with('success','Product deleted successfully');

    }
}
