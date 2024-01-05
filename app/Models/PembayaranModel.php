<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PembayaranModel extends Model
{

    use HasFactory;

    protected $table = "pembayaran";
    protected $guarded = ["id"];

    public function Siswa()
    {
        return $this->belongsTo(SiswaModel::class, "siswa_id", "id");
    }
}
