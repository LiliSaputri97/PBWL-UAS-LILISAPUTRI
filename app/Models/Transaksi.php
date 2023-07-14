<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = '[]';
    protected $fillable = [
        'transaksi_id',
        'transaksi_nama_barang',
        'transaksi_nama_pelanggan',
        'transaksi_tanggal',
        'transaksi_jumlah_beli',
        'transaksi_total'
    ];
    public function barang() :BelongsTo
    {
        return $this->belongsTo(barang::class, 'transaksi_nama_barang');    
    }
    public function pelanggan() :BelongsTo
    {
        return $this->belongsTo(pelanggan::class, 'transaksi_nama_pelanggan');    
    }
}
