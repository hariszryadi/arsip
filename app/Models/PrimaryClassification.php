<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrimaryClassification extends Model
{
    use HasFactory;

    public function secondary() {
        return $this->hasMany(SecondaryClassification::class);
    }
}
