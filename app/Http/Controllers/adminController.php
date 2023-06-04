<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Design;
use App\Models\Human;
use App\Models\Item;
use App\Models\Job;
use App\Models\Manage;
use App\Models\Most;
use App\Models\Owner;
use App\Models\Post;
use App\Models\Program;
use App\Models\Promotion;
use App\Models\Rate;
use App\Models\Text;
use App\Models\Work;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function textc(){
        $text=Text::findOrFail(1)->condition;
        return view("admin.conditions",compact("text"));
    }
    public function textp(){
        $text=Text::findOrFail(1)->policy;
        return view("admin.policy",compact("text"));
    }
    public function textc_update(Request $request){
        $text=Text::findOrFail(1);
        $text->condition=$request->condition;
        $text->save();
        return back();
    }
    public function textp_update(Request $request){
        $text=Text::findOrFail(1);
        $text->policy=$request->policy;
        $text->save();
        return back();
    }
    public function contacts(){
        $contacts=Contact::orderBy("created_at","desc")->get();
        return view("admin.contacts",compact("contacts"));
    }
    public function main(){
        return view("admin.main");
    }



    public function addmost(){
        $mosts=Most::orderBy("created_at","desc")->get();
        return view("admin.addmost",compact("mosts"));
    }
    public function savemost(Request $request){
        $most=new Most();
        $most->link=$request->link;
        $most->title=$request->title;
        $most->work_id=$request->work_id;
        $most->description=$request->description;
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);

        }
        $most->image=$fileToStore;
        $most->save();
        return back();
    }

    public function updatemost(Request $request,$id){
        $most=Most::findOrFail($id);
        $most->link=$request->link;
        $most->title=$request->title;
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);

        }else{
            $fileToStore=$most->image;
        }
        $most->image=$fileToStore;
        $most->save();
        return back();
    }

    public function deletemost($id){
        $most=Most::findOrFail($id);
        $most->delete();
        return back();
    }
    public function addcategory(){
        $categories=Category::orderBy("created_at","desc")->get();
        return view("admin.addcategory",compact("categories"));
    }
    public function savecategory(Request $request){
        $category=new Category();
        $category->title=$request->title;
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);

        }
        $category->image=$fileToStore;
        $category->save();
        return back();

    }
    public function updatecategory(Request $request,$id){
        $category=Category::findOrFail($id);
        $category->title=$request->title;
        if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);

        }else{
            $fileToStore=$category->image;
        }
        $category->image=$fileToStore;
        $category->save();
        return back();

    }

    public function deletecategory($id){
        $category=Category::findOrFail($id);
        $category->delete();
        return back();
    }

 

      /*******************post***********/
       
      public function addpost(){
        $posts=Post::all();
          return view("admin.addpost",compact("posts"));
      }
      public function editpost($id){
        $post=Post::findOrFail($id);
          return view("admin.editpost",compact("post"));
      }
  
      public function savepost(Request $request){
          $post=new Post();
          $post->title=$request->title;
          $post->description=$request->description;
          $post->text=$request->text;
          $post->slug=str_replace(' ', '-', $request->title);

          if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);

        }
        $post->image=$fileToStore;

          $post->save();
          return back();
  
      }
  
      public function updatepost(Request $request,$id){
          $post=Post::findOrFail($id);
          $post->title=$request->title;
          $post->description=$request->description;
          $post->text=$request->text;
          $post->slug=str_replace(' ', '-', $request->title);
          if($request->hasFile('image')){
            $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
            $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
            $extension=$request->file('image')->getClientOriginalExtension();
            $fileToStore=$fileName.'_'.time().'.'.$extension;
            $path=$request->file('image')->storeAs('public/uploads',$fileToStore);

        }else{
            $fileToStore=$post->image;
        }
        $post->image=$fileToStore;
          $post->save();
          return back();
  
      }
      public function deletepost($id){
          $post=Job::findOrFail($id);
          $post->delete();
          return back();
      }
      /****************post*******/

       /*******************work***********/
       
       public function addwork(){
        $works=Work::all();
          return view("admin.addworks",compact("works"));
      }
      public function editworks($id){
        $work=Work::findOrFail($id);
          return view("admin.editwork",compact("work"));
      }
  
      public function savework(Request $request){
          $work=new Work();
          $work->title=$request->title;
          $work->slug=str_replace(' ', '-', $request->title);

          $work->save();
          return back();
  
      }
  
      public function updatework(Request $request,$id){
          $work=Work::findOrFail($id);
          $work->title=$request->title;    
          $work->slug=str_replace(' ', '-', $request->title);
   
          $work->save();
          return back();
  
      }
      public function deletework($id){
          $work=Work::findOrFail($id);
          $work->delete();
          return back();
      }
      /****************work*******/

}
