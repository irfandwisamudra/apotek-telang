<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $fillable = ['nama_supplier', 'alamat', 'kota', 'no_telp'];

    public function drugs()
    {
        return $this->hasMany(Drug::class, 'supplier_id', 'id');
    }
}
