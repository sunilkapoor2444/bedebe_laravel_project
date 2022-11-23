<?php

namespace App\Models\Buyer\DirectShop;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'buyer_invoices';

    protected $fillable = [ 
        'user_id', 'user_type', 'name', 'invoice_no', 'quantity', 'amount', 'currency', 'invoice_type', 'invoice_status', 'payment_method', 'terms_conditions'
    ];
}
