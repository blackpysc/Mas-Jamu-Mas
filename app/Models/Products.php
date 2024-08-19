<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    // protected $table = 'products';
    protected $fillable = ['name', 'description', 'price', 'category_id', 'image'];

    protected $guarded = ['id'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
    public function scopeSearch($query, $value)
    {
        $query->where('name', 'like', "%{$value}%")
            ->orWhere('description', 'like', "%{$value}%");
    }
}
