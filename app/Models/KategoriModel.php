<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = "other_kategori";
    protected $guarded = ["id"];

    public function inventaris()
    {
        return $this->belongsTo(InventarisModel::class);
    }
}
