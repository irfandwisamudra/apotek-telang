<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['tanggal', 'user_id', 'nama_customer', 'kode_obat', 'qty', 'total'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function drugs()
    {
        return $this->hasMany(Drug::class, 'kode_obat', 'kode');
    }

}
