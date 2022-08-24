<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(User::class,'created_by');
    }

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
