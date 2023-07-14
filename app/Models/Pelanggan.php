<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'tb_pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $guarded = '[]';
    protected $fillable = [
        'pelanggan_id',
        'pelanggan_nama',
        'pelanggan_alamat',
        'pelanggan_no_tlpn'
    ];
    public function booking() :HasMany
    {
        return $this->hasMany(Booking::class, 'booking_nama_pelanggan', 'pelanggan_id');    
    }
}
