<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TertiaryClassification extends Model
{
    use HasFactory;

    public function secondary() {
        return $this->belongsTo(SecondaryClassification::class, 'secondary_classification_id');
    }
}
