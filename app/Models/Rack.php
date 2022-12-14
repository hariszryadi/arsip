<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rack extends Model
{
    use HasFactory;

    protected $fillable = ['floor', 'type', 'no_rack', 'capacity', 'used'];

    public function archives() {
        return $this->hasMany(Archives::class);
    }
}
