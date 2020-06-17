<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersediaanBarang extends model
{
    protected $fillable = [
        'gambar','kodebarang', 'namabarang', 'hargapokok', 'hargajual', 'jumlah', 'nilai'
    ];
}
?>