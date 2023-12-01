<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswamodel extends Model
{
    protected $table = "siswa";

    public function Category()
    {
        return $this->belongsTo(CategoryModel::class, 'category_id', 'id');
    }

    public function Type()
    {
        return $this->belongsTo(TypeModel::class, 'type_id', "id");
    }
}
