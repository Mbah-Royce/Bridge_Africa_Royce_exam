<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'avatar',
        'discount',
        'published',
        'instock',
        'inservice',
        'condition',
        'user_id',

    ];

    public static function uploadAvatar($image){

        $filename = $image->getClientOriginalName();
        $image->storeAs('proimages',$filename,'public');
        


}
    


}
