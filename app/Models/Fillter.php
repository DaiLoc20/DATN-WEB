<?php

namespace App\Models;

use Fiber;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fillter extends Model
{
    use HasFactory;
    // use SoftDeletes;
    protected $fillable = ['name', 'parent_id'];

    protected $guarded=[];
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function children()
    {
        return $this->hasMany(Fillter::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Fillter::class, 'parent_id');
    }
}
