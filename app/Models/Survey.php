<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    public function for_office()
    {
        return $this->belongsTo(Office::class, 'office_id');
    }
}
