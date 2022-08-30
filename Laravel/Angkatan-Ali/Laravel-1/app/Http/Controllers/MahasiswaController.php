<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

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

        return view('index', compact('mahasiswas'));
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
        $validasi = $request->validate([
            'nim' => 'required|max:8',
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,prempuan',
            'jurusan' => 'required',
            'alamat' => 'required'
        ], [
            'nim.required' => 'NIM wajib diisi',
            'nim.max' => 'NIM tidak boleh lebih dari 8 karakter',
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama harus alpabet',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'jenis_kelamin.in' => 'Harus dipilih salah satu',
            'jurusan' => 'Jurusan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi'
        ]);

        Mahasiswa::create($validasi);

        // $request->session()->flash('create', "Data {$validasi['nama']} berhasil ditambahkan");
        return redirect()->route('mahasiswa.index')->with('create', "Data {$validasi['nama']} berhasil ditambahkan");
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

        return view('read', compact('mahasiswa'));
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

        return view('form-edit', compact('mahasiswa'));
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
            'nama' => 'required|string',
            'jenis_kelamin' => 'required|in:laki-laki,prempuan',
            'jurusan' => 'required',
            'alamat' => 'required'
        ], [
            'nim.required' => 'NIM wajib diisi',
            'nim.max' => 'NIM tidak boleh lebih dari 8 karakter',
            'nama.required' => 'Nama wajib diisi',
            'nama.string' => 'Nama harus alpabet',
            'jenis_kelamin.required' => 'Jenis Kelamin wajib diisi',
            'jenis_kelamin.in' => 'Harus dipilih salah satu',
            'jurusan' => 'Jurusan wajib diisi',
            'alamat.required' => 'Alamat wajib diisi'
        ]);

        Mahasiswa::where('id', $id)->update($validasi);

        return redirect()->route('mahasiswa.index')->with('edit', "Data {$validasi['nama']} telah diubah");
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

        return redirect()->route('mahasiswa.index')->with('destroy', "Data telah dihapus");
    }
}
