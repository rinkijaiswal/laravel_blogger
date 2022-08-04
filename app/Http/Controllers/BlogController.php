<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function createBlog(Request $request){
        if($request->isMethod('post')){
            $this->validateForm($request);
            $file = $request->file('image');
            $destination = 'uploads';
            if($file->move($destination,$file->getClientOriginalName())){
                $data = [
                    'title' => $request->get('title'),
                    'description' => $request->get('description'),
                    'image' => $file->getClientOriginalName(),
                    'category' =>$request->get('category')
                ];
                $result = (new Blog)->createBlog($data);
                if($result){
                    return redirect()->to('/blog/create')->with('message','Product created successfully');
                }else{
                    return redirect()->to('/blog/create')->with('message','error occurred');
                }
            }
        }
        return view('blog.create');
    }

    public function view(){
        $blogs = (new Blog)->getAll();
        return view('blog.view',['blogs'=>$blogs]);
    }

    public function update($id, Request $request){
        $result = (new Blog)::where('id',$id)->get();
        $blog = $result[0]->getOriginal();
        if($request->isMethod('post')){


            // $image = $request->file('image');
            // if($image == ''){
            //     $image = $blog['image'];
            // }else{
            //     $image = $request->file('image');
            // }


            $title = $request->get('title');
            $description = $request->get('description');
            $result = (new Blog)::where('id',$id)->update(['title'=>$title,'description' => $description]);
            if($result){
                return redirect()->to('/')->with('message','Product updated successfully');
            }else{
                return redirect()->to('/')->with('message','error occurred');
            }
        }
        return view('blog.update',['blog' => $blog]);
    }

    public function delete($id){
        $result = (new Blog)::where('id',$id)->delete();
        if($result){
            return "<script>Swal.fire({
                icon: 'success',
                title: 'Deleted Successfully',
                text: 'food deleted successfully!',
              })</script>";
        }else{
            return redirect()->to('/blog/create')->with('message','error occurred');
        }
    }

    public function validateForm($request){
        return $this->validate($request,[
            'title' => 'required|string',
            'description' => 'required|min:3|max:500',
        ],[
            'title.required' => 'title is required, Please fill!',
            'description.min' => 'Minimum 3 letters are required',
            'description.max' => 'Maximim 500 letters allowed'
        ]);
    }
}
