<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssetCategory extends Model
{
    use HasFactory;

    protected $primaryKey = 'category_id';
    public $incrementing = true;

    protected $fillable = [
        'category_name',
        'category_description',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function assets()
    {
        return $this->hasMany(Asset::class, 'category_id', 'category_id');
    }
}
