<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ProductLinesTrait;

class ProductLinesController extends Controller
{
    use ProductLinesTrait;

    public function list()
    {
        $categories = array_map(
            function ($item) { return [$item['productLine']]; },
            $this->get()
        );

        return view('pages.categories', [
            'categories' => $categories,
            'title' => 'Liste des catégories de maquettes',
            'statistics' => 'Hello']);
    }

    public function show(string $name)
    {

    }
}
