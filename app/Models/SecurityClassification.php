<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityClassification extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'access_rights', 'basic_consideration', 'processing_unit'];
}
