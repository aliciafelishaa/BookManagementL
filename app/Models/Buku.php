<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Buku extends Model
{
    // protected $fillable = ['judul', 'pengarang', 'tahun_terbit'];
    protected $guarded = [];

    public function Kategori():BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }
    public function Penerbit():BelongsTo
    {
        return $this->belongsTo(Penerbit::class);
    }
}
