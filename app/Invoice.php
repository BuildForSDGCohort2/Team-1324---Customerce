<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'invoice_no', 'invoice_date', 'due_date',
        'title', 'sub_total', 'discount',
        'grand_total', 'client',
        'client_address'
    ];

    public static function orderBy(string $string, string $string1)
    {
    }

    public function products()
    {
        return $this->hasMany(InvoiceProduct::class);
    }
}
