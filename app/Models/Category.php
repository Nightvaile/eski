<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Category extends Model
{
    use Sluggable;
    protected $table = 'categories';
    protected $fillable = [
        'parent_id',
        'name',
        'slug',
        'status',
    ];

    public function sluggable(): array
    {

        return [
            'slug' => [
                'source' => 'name', // 'ad' sütunu slug olarak kullanılacak
                'separator' => '-', // Kısa çizgi ile ayrılacak
                'unique' => false, // Benzersiz olmayacak
                'includeTrashed' => false, // Silinmiş öğeler de dahil edilmeyecek
            ],
        ];
    }
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
    public function parent()
    {
        return $this->belongsTo(Category::class, 'id');
    }
}
