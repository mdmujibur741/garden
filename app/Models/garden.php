<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\category;
use App\Models\union;
use App\Models\lease;

class garden extends Model
{
    use HasFactory;

    protected $gurged = [];

    public function category()
    {
          return $this->belongsTo(category::class,'cat_id');
    }

    public function union()
    {
         return $this->belongsTo(union::class, 'union_id');
    }

    public function lease()
    {
        return $this->belongsTo(lease::class, 'leaCla_id');
    }

    public function upozela()
    {
        return $this->belongsTo(upozela::class, 'upozela_id');
    }
}
