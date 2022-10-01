<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapping extends Model
{
    use HasFactory;

    protected $table = 'mapping';

    protected $fillable = [
        'code',
        'name',
        'archive_type',
        'security',
        'retention',
        'active',
        'inactive',
        'retention_text'
    ];

    public function archives() {
        return $this->hasMany(Archives::class);
    }
}
