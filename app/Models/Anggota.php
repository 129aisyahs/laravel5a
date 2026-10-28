<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    public function transaksis()
    {
        return $this->hasMany(Transaksi::class);
    }
}
