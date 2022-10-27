<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archives extends Model
{
    use HasFactory;

    protected $table = 'archives';

    protected $fillable = [
        'name',
        'mapping_id',
        'code_classification',
        'archive_creator_id',
        'year',
        'amount',
        'dev_level',
        'rack_id',
        'box',
        'file',
        'officer',
        'status' 
    ];

    public function mapping() {
        return $this->belongsTo(Mapping::class, 'mapping_id');
    }

    public function rack() {
        return $this->belongsTo(Rack::class, 'rack_id');
    }
}
