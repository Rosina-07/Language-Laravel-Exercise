<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Difficulty extends Model
{
    use HasFactory;

    public $hidden = ['id', 'updated_at', 'created_at'];

    public function languages(): HasMany
    {
        return $this->hasMany(Language::class);
    }
}
