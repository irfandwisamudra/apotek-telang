<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $fillable = ['icon', 'kode', 'supplier_id', 'nama_obat', 'supplier', 'stok', 'harga'];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'kode_obat', 'kode');
    }
}
