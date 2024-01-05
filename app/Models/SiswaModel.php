<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SiswaModel extends Model
{

    use HasFactory;

    protected $table = "siswa";
    protected $guarded = ["id"];

    public function Category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }

    public function Type()
    {
        return $this->belongsTo(TypeModel::class, 'type_id', "id");
    }

    public function Pembayaran()
    {
        return $this->hasMany(PembayaranModel::class, "siswa_id", "id");
    }
}
