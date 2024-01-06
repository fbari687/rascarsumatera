<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory, Sluggable;
    protected $guarded = ['id'];

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function additional_informations()
    {
        return $this->hasMany(AdditionalInformation::class, 'product_id', 'id');
    }

    public function scopeFilterBySlug($query, $slug)
    {
        return $query->whereHas('type', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->orWhereHas('brand', function ($query) use ($slug) {
            $query->where('slug', $slug);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
