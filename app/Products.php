<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Products extends Model
{
    public static function getAllProducts(){
        return DB::table('products')
            ->select(DB::raw("
                products.*,
                categories.name as category
            "))
            ->join('categories', function($join){
                $join->on('categories.id', 'products.id_category');
            })
            ->get()
        ;
    }
}
