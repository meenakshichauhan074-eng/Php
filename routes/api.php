<?php
use Illuminate\Support\Facades\Route;
use App\Models\Product;
use Illuminate\Http\Request;

Route::get('/products',function(){
    return Product::where('status',true)->get()->map(function($p){
        return[
            'id'=>$p->id,
            'name'=>$p->name,
            'description'=>$p->description,
            'price'=>$p->price,
            'category'=>$p->category,
            'image_url'=>$p->image ?  asset('storage/'.$p->image):null,
        ];
    });
});

Route::get('/products/{id}',function($id){
    $p = Product::findOrFail($id);

    return[
        'id' =>$p->id,
        'name'=>$p->name,
        'description'=>$p->description,
        'price'=>$p->price,
        'category'=>$p->category,
        'image_url'=>$p->image ? asset('storage/'.$p->image):null,
    ];
});
?>