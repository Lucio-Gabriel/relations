<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    //

    public function index(Request $r){
        $invoices = Invoice::all();
        return $invoices;
    }

    public function findOne(Request $r){
        $invoice = Invoice::find($r->id);
        $invoice['user'] = $invoice->user;
        return $invoice;
    }

    public function createInvoice(Request $r){
        $data = $r->only(['description', 'value', 'address_id', 'user_id']);

        $invoice = Invoice::create($data);

        return $invoice;
    }
}
