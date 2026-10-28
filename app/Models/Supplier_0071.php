<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supplier_0071 extends Model
{
    use HasFactory;
    protected $table = 'supplier_0071';
    protected $primaryKey = 'id_supplier';
    public $timestamps = false;
    protected $fillable = [
        'nama_supplier',
        'no_telp',
        'alamat',
        'wilayah_asal',
    ];
}
