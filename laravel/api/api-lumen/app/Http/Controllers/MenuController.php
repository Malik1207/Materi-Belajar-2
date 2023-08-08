<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::all();

        return response()->json($menu);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_category' => 'required|numeric',
            'menu' => 'required',
            'price' => 'required|numeric',
            'picture' => 'required'
        ]);

        $picture = $request->file('picture')->getClientOriginalName();
        $request->file('picture')->move('upload', $picture);

        $data = [
            'id_category' => $request->input('id_category'),
            'menu' => $request->input('menu'),
            'price' => $request->input('price'),
            'picture' => url('upload/'.$picture),
        ];

        $menu = Menu::create($data);

        if ($menu) {
            $result = [
                'status' => 200,
                'pesan' => 'Data has been added.',
                'data'  => $data
            ];
        } else {
            $result = [
                'status' => 400,
                'pesan' => 'Data has not been added.',
                'data' => ''
            ];
        }

        return response()->json(['Picture successfully added.', $result]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        //
    }
}
