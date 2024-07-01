<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    // Specify the table name
    protected $table = 'log';

    // Specify the primary key
    protected $primaryKey = 'kode_log';

    // The primary key is auto-incrementing
    public $incrementing = true;

    // Specify the attributes that are mass assignable
    protected $fillable = [
        'jenis_aktivitas', 'kode_barang', 'nama_barang', 'qty', 'user'
    ];

    // Timestamps
    public $timestamps = true;

    // Define the relationship with Barang model
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }
}
