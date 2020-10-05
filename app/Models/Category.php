<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\subCategories;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [
        'name', 'category_id','created_at','updated_at',
    ];


    public function subCategories(){
        /**
         * subCategory possuí uma coluna category_id que faz referencia a coluna id de Category
        */
        return $this->hasMany(subCategory::class, 'category_id', 'id');
    }
}
