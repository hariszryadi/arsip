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
        'year',
        'amount',
        'dev_level',
        'location',
        'loc_floor',
        'loc_status',
        'loc_rack',
        'loc_box',
        'file',
        'officer',
        'status' 
    ];

    public function mapping() {
        return $this->belongsTo(Mapping::class, 'mapping_id');
    }
}
