<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BarangKeluar;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';
    protected $primaryKey = 'kode_barang';
    public $incrementing = false; // Because kode_barang is not an auto-incrementing primary key
    protected $keyType = 'integer';


    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'grade',
        'stok',
    ];
    public function barang_keluar(): HasMany
    {
        return $this->hasMany(BarangKeluar::class, 'kode_barang');
    }
}
