<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswamodel extends Model
{
    protected $table = "siswa";

    public function Category()
    {
        return $this->hasOne(CategoryModel::class, 'category_id', 'id');
    }
}
