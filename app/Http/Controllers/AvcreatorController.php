<?php

namespace App\Http\Controllers;


use App\Models\avcreators;
use App\Http\Requests\StoreavcreatorRequest;
use App\Http\Requests\UpdateavcreatorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvcreatorController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('halaman1');
    }
    public function halaman2()
    {
        return view ('halaman2');
    }
    public function halaman3()
    {
        return view ('halaman3');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        try {
            // Sisipkan data ke dalam tabel
            $data = DB::table('avcreators')->insert([
                "nama" => $request->nama,
                "notel" => $request->notel,
                "jk" => $request->jk,
                "acara" => $request->acara,
                "alamat" => $request->alamat,
                "foto" => $request->foto,]);
    if ($data) {
        // Jika penyisipan berhasil, tangani pengunggahan file
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
            // Perbarui kolom "foto" dengan nama file
            DB::table('avcreators')
                ->where('nama', $request->nama)
                ->update(['foto' => $request->file('foto')->getClientOriginalName()]);
        }
    }
            
    
            return redirect()->route('app.orderlist')->with('success', 'Berhasil Order Cuy');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal menyimpan data: ' . $e->getMessage());
        }
    }
    
    public function order()
    {
        return view ('order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreavcreatorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $orderlist = DB::table('avcreators') -> get();
        return view('orderlist', ['orderlist' => $orderlist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $orderlist = avcreators::findOrFail($id);
        return view('edit', compact('orderlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
         // Mendapatkan nama file foto sebelum pembaruan
        $oldFoto = DB::table('avcreators')->where('id', $id)->value('foto');

        $orderlist = avcreators::findOrFail($id);
        $orderlist -> update([
            "nama" => $request -> nama,
            "notel" => $request -> notel,
            "jk" => $request -> jk,
            "acara" => $request -> acara,
            "alamat" => $request -> alamat,
            "foto" => $request->foto,
        ]);
        if ($orderlist) {
            // Jika pembaruan berhasil, tangani pengunggahan file
            if ($request->hasFile('foto')) {
                // Hapus foto lama jika ada
                if (!empty($oldFoto)) {
                    $oldFotoPath = public_path('gambar/') . $oldFoto;
                    if (file_exists($oldFotoPath)) {
                        unlink($oldFotoPath);
                    }
                }
            if ($request->hasFile('foto')) {
                $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
                // Perbarui kolom "foto" dengan nama file
                DB::table('avcreators')
                    ->where('id', $id) // Anggap "id" adalah pengidentifikasi unik
                    ->update(['foto' => $request->file('foto')->getClientOriginalName()]);
            }
        }
        return redirect() -> route('app.orderlist') -> with('success', 'Berhasil Diubah Cuy'); 
    }
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $orderlist = avcreators::findOrFail($id);
        $orderlist -> delete();
        return redirect() -> route('app.orderlist') -> with('success', 'Berhasil Dihapus Cuy'); 
    }
}
