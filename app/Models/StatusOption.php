<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusOption extends Model
{
    protected $table = 'status_option';
    protected $primaryKey = 'status_id';
    public $timestamps = false;

    protected $fillable = [
        'status',
    ];
}
