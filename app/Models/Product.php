<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;

    protected $table ='products';
    protected $fillable =
        [
            'name',
            'slug',
            'description',
            'price',
            'amount',
            'image',
            'out_of_stock',
            'status',
        ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name', // 'ad' sütunu slug olarak kullanılacak
                'separator' => '-', // Kısa çizgi ile ayrılacak
                'unique' => true, // Benzersiz olmayacak
                'includeTrashed' => true, // Silinmiş öğeler de dahil edilmeyecek
            ],
        ];

    }
}
