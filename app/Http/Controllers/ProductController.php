<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(10);
        return view('products', compact('products'));
    }

    public function view_pdf()
    {
        $products = Product::all();
        return view('pdf.products', compact('products'));
    }

    public function pdf()
    { 

        $products = Product::all(); 

        $pdf = PDF::loadView('pdf.products', compact('products'))->setPaper(null, 'landscape');

        return $pdf->download('productos.pdf');
    }
}
