<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class itemController extends Controller
{
    
    public function saveitem(Request $request){
        $item=new Item();
        $item->work_id=$request->work_id;
        $item->title=$request->title;
        $item->link=$request->link;
        $item->ylink=$request->ylink;

      if($request->hasFile('image')){
          $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
          $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
          $extension=$request->file('image')->getClientOriginalExtension();
          $fileToStore=$fileName.'_'.time().'.'.$extension;
          $path=$request->file('image')->storeAs('public/uploads',$fileToStore);
        $item->image=$fileToStore;

      }

      if($request->hasFile('image1')){
        $fileNameWithExt=$request->file('image1')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image1')->getClientOriginalExtension();
        $fileToStore1=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image1')->storeAs('public/uploads',$fileToStore1);
        $item->image1=$fileToStore1;

    }

    if($request->hasFile('image2')){
        $fileNameWithExt=$request->file('image2')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image2')->getClientOriginalExtension();
        $fileToStore2=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image2')->storeAs('public/uploads',$fileToStore2);
        $item->image2=$fileToStore2;

    }


    if($request->hasFile('image3')){
        $fileNameWithExt=$request->file('image3')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image3')->getClientOriginalExtension();
        $fileToStore3=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image3')->storeAs('public/uploads',$fileToStore3);
        $item->image3=$fileToStore3;

    }


    if($request->hasFile('image4')){
        $fileNameWithExt=$request->file('image4')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image4')->getClientOriginalExtension();
        $fileToStore4=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image4')->storeAs('public/uploads',$fileToStore4);
        $item->image4=$fileToStore4;

    }



    if($request->hasFile('image5')){
        $fileNameWithExt=$request->file('image5')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image5')->getClientOriginalExtension();
        $fileToStore5=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image5')->storeAs('public/uploads',$fileToStore5);
        $item->image5=$fileToStore5;

    }


    if($request->hasFile('image6')){
        $fileNameWithExt=$request->file('image6')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image6')->getClientOriginalExtension();
        $fileToStore6=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image6')->storeAs('public/uploads',$fileToStore6);
        $item->image6=$fileToStore6;

    }

    if($request->hasFile('image7')){
        $fileNameWithExt=$request->file('image7')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image7')->getClientOriginalExtension();
        $fileToStore7=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image7')->storeAs('public/uploads',$fileToStore7);
        $item->image7=$fileToStore7;

    }

    if($request->hasFile('image8')){
        $fileNameWithExt=$request->file('image8')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image8')->getClientOriginalExtension();
        $fileToStore8=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image8')->storeAs('public/uploads',$fileToStore8);
        $item->image8=$fileToStore8;

    }

    if($request->hasFile('image9')){
        $fileNameWithExt=$request->file('image9')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image9')->getClientOriginalExtension();
        $fileToStore9=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image9')->storeAs('public/uploads',$fileToStore9);
        $item->image9=$fileToStore9;

    }

    if($request->hasFile('image10')){
        $fileNameWithExt=$request->file('image10')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image10')->getClientOriginalExtension();
        $fileToStore10=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image10')->storeAs('public/uploads',$fileToStore10);
        $item->image10=$fileToStore10;

    }


        $item->save();
        return back();

    }





    public function updateitem(Request $request,$id){
        $item=Item::findOrFail($id);
        $item->work_id=$request->work_id;
        $item->title=$request->title;
        $item->link=$request->link;
        $item->ylink=$request->ylink;

      if($request->hasFile('image')){
          $fileNameWithExt=$request->file('image')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
          $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
          $extension=$request->file('image')->getClientOriginalExtension();
          $fileToStore=$fileName.'_'.time().'.'.$extension;
          $path=$request->file('image')->storeAs('public/uploads',$fileToStore);
        $item->image=$fileToStore;

      }

      if($request->hasFile('image1')){
        $fileNameWithExt=$request->file('image1')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image1')->getClientOriginalExtension();
        $fileToStore1=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image1')->storeAs('public/uploads',$fileToStore1);
        $item->image1=$fileToStore1;

    }

    if($request->hasFile('image2')){
        $fileNameWithExt=$request->file('image2')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image2')->getClientOriginalExtension();
        $fileToStore2=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image2')->storeAs('public/uploads',$fileToStore2);
        $item->image2=$fileToStore2;

    }


    if($request->hasFile('image3')){
        $fileNameWithExt=$request->file('image3')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image3')->getClientOriginalExtension();
        $fileToStore3=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image3')->storeAs('public/uploads',$fileToStore3);
        $item->image3=$fileToStore3;

    }


    if($request->hasFile('image4')){
        $fileNameWithExt=$request->file('image4')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image4')->getClientOriginalExtension();
        $fileToStore4=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image4')->storeAs('public/uploads',$fileToStore4);
        $item->image4=$fileToStore4;

    }



    if($request->hasFile('image5')){
        $fileNameWithExt=$request->file('image5')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image5')->getClientOriginalExtension();
        $fileToStore5=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image5')->storeAs('public/uploads',$fileToStore5);
        $item->image5=$fileToStore5;

    }


    if($request->hasFile('image6')){
        $fileNameWithExt=$request->file('image6')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image6')->getClientOriginalExtension();
        $fileToStore6=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image6')->storeAs('public/uploads',$fileToStore6);
        $item->image6=$fileToStore6;

    }

    if($request->hasFile('image7')){
        $fileNameWithExt=$request->file('image7')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image7')->getClientOriginalExtension();
        $fileToStore7=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image7')->storeAs('public/uploads',$fileToStore7);
        $item->image7=$fileToStore7;

    }

    if($request->hasFile('image8')){
        $fileNameWithExt=$request->file('image8')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image8')->getClientOriginalExtension();
        $fileToStore8=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image8')->storeAs('public/uploads',$fileToStore8);
        $item->image8=$fileToStore8;

    }

    if($request->hasFile('image9')){
        $fileNameWithExt=$request->file('image9')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image9')->getClientOriginalExtension();
        $fileToStore9=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image9')->storeAs('public/uploads',$fileToStore9);
        $item->image9=$fileToStore9;

    }

    if($request->hasFile('image10')){
        $fileNameWithExt=$request->file('image10')->getClientOriginalName();//اعمل تعديل هنا عاوز تحط الفاليديت مكان الريكويست
        $fileName=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $extension=$request->file('image10')->getClientOriginalExtension();
        $fileToStore10=$fileName.'_'.time().'.'.$extension;
        $path=$request->file('image10')->storeAs('public/uploads',$fileToStore10);
        $item->image10=$fileToStore10;

    }


        $item->save();
        return back();

    }


    
    
}
