<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    public function is_office_in_use()
    {
        return $this->hasMany(User::class, 'office_id')->exists() || $this->hasMany(Survey::class, 'office_id')->exists();
    }
}
