<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondaryClassification extends Model
{
    use HasFactory;

    public function primary() {
        return $this->belongsTo(PrimaryClassification::class, 'primary_classification_id');
    }

    public function tertiary() {
        return $this->hasMany(SecondaryClassification::class);
    }
}
