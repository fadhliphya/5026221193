<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agen extends Model
{
    use HasFactory;

    protected $table = 'agen'; // Nama tabel di database
    protected $primaryKey = 'kodeagen'; // Primary key
    public $incrementing = false; // Non-increment jika primary key bukan integer
    protected $keyType = 'string'; // Tipe data primary key
    protected $fillable = ['kodeagen', 'namaagen', 'jumlahagen', 'tersedia']; // Kolom yang bisa diisi
}
