<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class TransactionListController extends Controller
{
    public function index()
    {
        $data = Transaction::all();
        // dd($data);
        return view('pages.admin.transaction-list', compact('data'));
    }

    public function exportRevenue()
    {
        $data = Transaction::all();
        $pdf = Pdf::loadView('revenue',compact('data'));
        return $pdf->download('invoice-' . date('Y-m-d') . '.pdf');

    }
}
