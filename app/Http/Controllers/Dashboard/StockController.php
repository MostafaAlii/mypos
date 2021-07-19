<?php
namespace App\Http\Controllers\Dashboard;
use App\Http\Controllers\Controller;
use App\Models\Stock;
use App\Models\Product;
use Illuminate\Http\Request;
class StockController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('dashboard.pages.stocks.index', compact('products'));
    }
}
