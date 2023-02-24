<?php

namespace App\Http\Controllers;

use App\Traits\ProductTrait;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    use ProductTrait;

    public function list()
    {
        $result = Product::
        return response()->json(Product::all());
    }

    public function show(string $code)
    {
        return view('pages.model',[]);
    }

    public function search()
    {
        return view('pages.search', ['title' => 'Moteur de recherche']);
    }

    public function searchResults(Request $request)
    {
        $keyword = $request->input('keyword');

        return view('pages.model', ['title' => "Résultats de la recherche pour {$keyword}", 'models' => $this->getBy($keyword)]);
    }
}
