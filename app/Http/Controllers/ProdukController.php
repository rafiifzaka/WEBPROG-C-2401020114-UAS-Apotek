<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    private $file = "storage/produk.json";

    private function getData()
    {
        if (!file_exists($this->file)) {
            file_put_contents($this->file, json_encode([], JSON_PRETTY_PRINT));
        }

        return json_decode(file_get_contents($this->file), true);
    }

    private function saveData($data)
    {
        file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }

    public function index()
    {
        $products = $this->getData();
        return view('produk.index', compact('products'));
    }

    public function create()
    {
        return view('produk.create');
    }

    public function store(Request $request)
    {
        $data = $this->getData();

        $data[] = [
            "id" => time(),
            "nama" => $request->nama,
            "harga" => $request->harga,
            "stok" => $request->stok
        ];

        $this->saveData($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $products = $this->getData();

        $products = array_filter($products, fn($p) => $p['id'] != $id);

        $this->saveData(array_values($products));

        return redirect()->route('produk.index');
    }
}
