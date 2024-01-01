<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Exports\ProductsExportsCollection;
use App\Exports\ProductsExportsView;

use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    public function index()
    {
        return view('products', [
            'products' => Product::paginate()
        ]);
    }

    public function collection()
    {
       return Excel::download(new ProductsExportsCollection, 'products.xlsx'); 
    }

    public function view()
    {
        return Excel::download(new ProductsExportsView, 'products.xlsx');
    }
}
