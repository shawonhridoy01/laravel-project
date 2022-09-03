<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{

    // getAllPost function is for showing all posts from database 
    public function getAllPost(){
        $posts = DB::table('posts')->get();
        
        return view('posts',compact('posts'));
    }

    // showSinglePost is for showing single full post by id 
    public function showSinglePost($id){
        $posts = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('posts'));
    }


    // addPost function is to redirect to form to add data in database 
    public function addPost(){
        return view('add-post');
    }


    // addPostSubmit function is to insert data into database 
    public function addPostSubmit(Request $request){
        $posts = DB::table('posts')->insert([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description
        ]);

        return redirect('posts')->with('insert_message',"Data Has Been Added Successfully");
    }


    public function deletePost($id){
        $posts = DB::table('posts')->where('id',$id)->delete();
        
        return back()->with('delete_message','Your Data Has Been Deleted Successfully');
        

    }

    public function updatePost($id){
        $posts = DB::table("posts")->where('id',$id)->first();
        return view("update-post",compact('posts'));
    }

    public function updatePostSubmit(Request $request){
        
            $posts = DB::table('posts')->where('id',$request->id)->update(
                [
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'description' => $request->description
                ]);

            return redirect('posts')->with("update_message","Your Data Has Been Updated Successfully");
    }

}
