<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request) {
        // if($request->hasFile('berkas')) {
        //     echo "path(): ".$request->berkas->path();
        //     echo "<br>";
        //     echo "extension(): ".$request->berkas->extension();
        //     echo "<br>";
        //     echo "getClientOriginalExtension(): ".$request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getMimeType(); ".$request->berkas->getMimetype();
        //     echo "<br>";
        //     echo "getClientOriginalName(): ".$request->berkas->getClientOriginalExtension();
        //     echo "<br>";
        //     echo "getSize(): ".$request->berkas->getSize();
        // } else {
        //     echo "Tidak ada berkas yang di upload";
        // }

        // Cara Pertama

        // $request->validate([
        //     'berkas' => 'required|file|image|max:5000',
        // ]);

        // $extFile = $request->berkas->getClientOriginalExtension();
        // $namaFile = 'Malix-'.time().".".$extFile;
        // // $namaFile = $request->berkas->getClientOriginalName();
        // $path = $request->berkas->storeAs('public', $namaFile);
        // // $path = $request->berkas->store('uploads');

        // $pathBaru = asset('storage/'.$namaFile);
        // echo "Proses Upload berhasil, file berada di : <a href='$pathBaru' >$pathBaru</a>";

        // // echo "Proses Upload berhasil, file berada di $path";
        // // echo $request->berkas->getClientOriginalName()." Lolos Validasi ";

        // Cara Kedua

        $request->validate([
            'berkas' => 'required|file|image|max:5000',
        ]);

        $extFile  = $request->berkas->getClientOriginalExtension();
        $namaFile = 'Pondok-'.time().".".$extFile;

        $path = $request->berkas->move('image',$namaFile);
        $path = str_replace('\\','/', $path);

        echo "Variabel path berisi: $path <br>";

        $pathBaru = asset('image/'.$namaFile);
        echo "Proses Upload berhasil, file berada di: <a href='$pathBaru' >$pathBaru</a>";

    }

    public function fileUploadRename()
    {
        return view('file-upload-rename');
    }

    public function prosesfileUploadRename(Request $request) {
        $request->validate([
            'nama_gambar' => 'required|min:5|alpha_dash',
            'nama_profile' => 'required|file|image|max:1000',
        ]);

        $extFile = $request->nama_profile->getClientOriginalExtension();
        $namaFile = $request->nama_gambar.".".$extFile;
        $request->nama_profile->storeAs('public/gambar',$namaFile);

        $pathPublic = asset('storage/gambar/'.$namaFile);

        echo "Gambar berhasil diupload ke : <a href=".$pathPublic." >$namaFile</a>";
        echo "<br> <br>";
        echo "<img src=".$pathPublic." width='200px' >";
    }
}
