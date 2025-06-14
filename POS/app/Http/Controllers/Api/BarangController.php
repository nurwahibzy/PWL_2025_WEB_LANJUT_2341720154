<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'kategori_id' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi gambar
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $imageName = null;
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Ambil nama file unik (hash)
            $imageName = $request->file('image')->hashName();

            $request->file('image')->storeAs('public/barang', $imageName);
        }

        // Ambil semua data dari request kecuali 'image' 
        $data = $request->except('image');

        $data['image'] = $imageName;

        $barang = BarangModel::create($data);

        return response()->json($barang, 201);
    }

    public function show(BarangModel $barang)
    {
        return($barang);
    }

    public function update(Request $request, BarangModel $barang)
    {
        $barang->update($request->all());
        return BarangModel::find($barang);
    }
    public function destroy(BarangModel $user)
    {
        $user->delete();
        return response()->json(
            [
                'success' => true,
                'message' => 'Data terhapus!'
            ]
        );
    }
}
