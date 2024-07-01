<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangKeluar extends Model
{
    // Specify the table name
    protected $table = 'barang_keluar';

    // Specify the primary key
    protected $primaryKey = 'id';

    // The primary key is auto-incrementing
    public $incrementing = true;

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'kode_barang', 'nama_barang', 'tanggal_waktu', 'grade', 'kuantitas', 'user'
    ];

    // Timestamps
    public $timestamps = true;

    // Define the relationship with BarangMasuk model
    public function barangMasuk()
    {
        return $this->belongsTo(BarangMasuk::class, 'id', 'id');
    }
}
