<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Design;
use App\Models\Human;
use App\Models\Item;
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

class mainController extends Controller
{
    public function conditions(){
        $text=Text::findOrFail(1);
        return view("conditions",compact("text"));
    }
    public function policy(){
        $text=Text::findOrFail(1);
        return view("policy",compact("text"));
    }
    public function index(){
        $rates=Rate::orderBy("created_at","desc")->get();
        $owners=Owner::orderBy("created_at","desc")->get();
        $mosts=Most::orderBy("created_at","desc")->take(8)->get();
        $works=Work::orderBy("created_at","desc")->get();
        
        $categories=Category::orderBy("created_at","desc")->get();
        return view("homepage",compact("rates","owners","mosts","categories","works"));
    }

   
    public function posts(){
        $posts=Post::orderBy("created_at","desc")->get();
        return view("posts",compact("posts"));
    }
    public function post_details($title){
        $post=Post::where("slug",$title)->first();
        return view("postdetails",compact("post"));
    }
    public function contact(){
        return view("contact");
    }
    public function works(){
        $works=Work::all();
        return view("works",compact("works"));
    }
    
    public function work_details($slug){
        
        $work=Work::where("slug",$slug)->first();
        if($work != null){
            return view("work-details",compact("work"));
        }else{
            $mosts=Most::orderBy("created_at","desc")->paginate(8);

            return view("work-details2",compact("mosts"));
        }
    }
    
    public function message(Request $request){
        $validate=$this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'mobile'=>'required|required',
            'message'=>'required',
                'g-recaptcha-response' => 'recaptcha',

        ]);
        $contact=new Contact();
        $contact->name=$validate['name'];
        $contact->email=$validate['email'];
        $contact->mobile=$validate['mobile'];
        $contact->message=$validate['message'];
        $contact->save();
        return back()->with("success","تم الارسال بنجاح");
        
    }

}
