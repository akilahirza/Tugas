<?php

namespace App\Http\Controllers;

use App\Models\Supplier_0071;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class FormController extends Controller
{
    public function index($id = null) {
        if ($id) {
            $supplier = Supplier_0071::findOrFail($id);
        } else {
            $supplier = new Supplier_0071();
        }

        return view("form", ["data" => $supplier]);
    }

    public function tambah(Request $request) {
        $request->validate([
            'nama_supplier' => 'required|string|max:100',
            'no_telp'       => 'required|string|max:20',
            'alamat'        => 'required|string|max:200',
            'wilayah_asal'  => 'required|string|max:100',
        ]);

        Supplier_0071::create($request->all());

        return redirect()->route('detail')->with('success', 'Data supplier berhasil ditambahkan.');
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama_supplier' => 'required|string|max:100',
            'no_telp'       => 'required|string|max:20',
            'alamat'        => 'required|string|max:200',
            'wilayah_asal'  => 'required|string|max:100',
        ]);

        $supplier = Supplier_0071::findOrFail($id);

        $supplier->update($request->all());

        return redirect()->route('detail')->with('success', 'Data supplier berhasil diperbarui.');
    }

    public function hapus($id) {
        $supplier = Supplier_0071::findOrFail($id);

        $supplier->delete();

        return redirect()->route('detail')->with('success', 'Data supplier berhasil dihapus.');
    }
}
