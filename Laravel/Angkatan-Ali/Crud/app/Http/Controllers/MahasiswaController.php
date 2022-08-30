<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Mahasiswa::get();

        return view('index',compact('mahasiswas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-pendaftaran');
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
            'nim' => 'required|max:8',
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required',
            'alamat' => 'required'
        ],[
            'nim.required' => 'NIM Wajib diisi',
            'nim.max' => 'NIM tidak boleh lebih 8 karakter',
            'nama.required' => 'Nama wajib diisi',
            'jenis_kelamin.required' => 'Jenis-Kelamin wajib diisi',
            'jenis_kelamin.in' => 'Jenis-Kelamin harus dipilih L atau P',
            'alamat.required' => 'Alamat tidak boleh kosong'
        ]);

        Mahasiswa::create($validate);

        // $request->session()->flash('create',"Data {$validate['nama']}, Berhasil ditambah");

        return redirect()->route('mahasiswa.index')->with('create',' Data ' .$validate['nama']. ' berhasil ditambah ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('read',compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('form-edit',compact('mahasiswa'));
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
        $validasi = $request->validate([
            'nim' => 'required|max:8',
            'nama' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required',
            'alamat' => 'required'
        ],[
            'nim.required' => 'NIM Wajib diisi',
            'nim.max' => 'NIM tidak boleh lebih 8 karakter',
            'nama.required' => 'Nama wajib diisi',
            'jenis_kelamin.required' => 'Jenis-Kelamin wajib diisi',
            'jenis_kelamin.in' => 'Jenis-Kelamin harus dipilih L atau P',
            'alamat.required' => 'Alamat tidak boleh kosong'
        ]);

        Mahasiswa::where('id', $id)->update($validasi);
        return redirect()->route('mahasiswa.index')->with('edit', "Data {$validasi['nama']} berhasil diubah");

        // $request->session()->flash('create',"Data {$validate['nama']}, Berhasil ditambah");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mahasiswa::where('id', $id)->delete();
        return redirect()->route('mahasiswa.index')->with('hapus', "Data berhasil diubah");
    }
}
