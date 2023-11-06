<?php

namespace App\Http\Controllers;

use App\Models\ServiceOrder;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $items = ServiceOrder::orderBy('created_at', 'desc')->get();
        return view('pages.invoice.index', [
            'items' => $items,
        ]);
    }

    public function print($id)
    {
        $item = ServiceOrder::find($id);
        return view('pages.invoice.print', [
            'item' => $item,
        ]);
    }
}
