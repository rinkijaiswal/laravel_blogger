<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function createBlog($data){
        return Blog::create($data);
    }

    public function getAll(){
        return Blog::get();
    }

    public function getSingleBlog($id){
        return Blog::find($id);
    }

    public function searchByTitle($query){
        return Blog::where('title',$query)->get();
    }
}
