<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use App\Gallery;
use App\Slide;
use App\Stock;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    public function home(){
        $data = DB::table('slides')->get();
        return view('admin.home',['slides' => $data]);
    }

    public function create_slide(){
        return view('admin.create_slide');
    }

    public function post_create_slide(Request $request){
//        echo $request->title1_size;
//        echo $request->title2_color;
//        echo $request->title3_style;
//        echo $request->title4_style;
//        exit();

        try {
            $last_id = DB::table('slides')->orderBy('id', 'desc')->first()->id;
            $last_id = $last_id + 1;
        } catch (Exception $e) {
            $last_id = 1;
        }

        $slide = new Slide();
        $slide->title1 = $request->title1;
        $slide->title2 = $request->title2;
        $slide->title3 = $request->title3;
        $slide->title4 = $request->title4;

        $slide->title1_size = $request->title1_size;
        $slide->title2_size = $request->title2_size;
        $slide->title3_size = $request->title3_size;
        $slide->title4_size = $request->title4_size;

        $slide->title1_color = $request->title1_color;
        $slide->title2_color = $request->title2_color;
        $slide->title3_color = $request->title3_color;
        $slide->title4_color = $request->title4_color;


        $slide->title1_style = $request->title1_style;
        $slide->title2_style = $request->title2_style;
        $slide->title3_style = $request->title3_style;
        $slide->title4_style = $request->title4_style;

        $main_image_title = '';
        $right_image_title = '';
        $left_image_title = '';
        $desktop_image_title = '';
        $mobile_image_title = '';

        if ($request->hasFile('desktop_image')){
            $desktop_image = $request->file('desktop_image');
            $desktop_image_title = $desktop_image->getClientOriginalName();
            $desktop_image->move(public_path().'/assets_anwarhx/img/slider/'.$last_id.'/',$desktop_image_title);
        }

        if ($request->hasFile('mobile_image')){
            $mobile_image = $request->file('mobile_image');
            $mobile_image_title = $mobile_image->getClientOriginalName();
            $mobile_image->move(public_path().'/assets_anwarhx/img/slider/'.$last_id.'/',$mobile_image_title);
        }

        if ($request->hasFile('main_image')){
            $main_image = $request->file('main_image');
            $main_image_title = $main_image->getClientOriginalName();
            $main_image->move(public_path().'/assets_anwarhx/img/slider/'.$last_id.'/',$main_image_title);
        }
        if ($request->hasFile('right_image')){
            $right_image = $request->file('right_image');
            $right_image_title = $right_image->getClientOriginalName();
            $right_image->move(public_path().'/assets_anwarhx/img/slider/'.$last_id.'/',$right_image_title);
        }
        if ($request->hasFile('left_image')){
            $left_image = $request->file('left_image');
            $left_image_title = $left_image->getClientOriginalName();
            $left_image->move(public_path().'/assets_anwarhx/img/slider/'.$last_id.'/',$left_image_title);
        }



        $slide->main_image = $main_image_title;
        $slide->right_image = $right_image_title;
        $slide->left_image = $left_image_title;
        $slide->desktop_image = $desktop_image_title;
        $slide->mobile_image = $mobile_image_title;
        // die($slide->mobile_iamge);
        $slide->save();

        return redirect('/admin')->withSuccess('success');

    }

    public function check_slide(Request $request){
        $id = $request->id;

        $status = DB::table('slides')->where('id',$id)->first()->status;

        if ($status == 'on'){
            DB::table('slides')->where('id',$id)->update(['status'=>'off']);
        }else{
            DB::table('slides')->where('id',$id)->update(['status'=>'on']);
        }
        return 'success';
    }

    public function delete_slide(Request $request){
        $id = $request->id;
        DB::table('slides')->where('id', $id)->delete();
        return back()->withDelete('success');
    }


    /*
     *  Contact Information Manage
     * */

    public function contact_info(){
        $data = DB::table('contact_infos')->get()->first();
        return view('admin.contact.contact_info',['info'=>$data]);
    }

    public function update_contact_info(Request $request){

        //$data = DB::table('contact_infos')->where('email',$request->email);
        //ContactInfo::All()->first()->update(['phone'=>$request->phone, 'email'=>$request->email, 'address'=>$request->address]);

        DB::table('contact_infos')->where('id','1')->update(['phone'=>$request->phone, 'email'=>$request->email, 'address'=>$request->address]);
        return back();
    }

    public function change_logo(Request $request){

        if ($request->hasFile('logo_image')){

            $logo = $request->file('logo_image');
            $logo_title = $logo->getClientOriginalName();
            $logo->move(public_path().'/assets_anwarhx/img/logo/',$logo_title);
        }

        DB::table('contact_infos')->where('id','1')->update(['logo'=>$logo_title]);
        return back();
    }


    /*
     *  Stocks Manage
     * */

    public function stock(){
        $data = DB::table('stocks')->get();
        return view('admin.stock.lists', ['stocks'=>$data]);
    }

    public function create_stock(){
        $categories = DB::table('stock_categories')->get();
        $sub = DB::table('stock_subcategories')->where('category_id','1')->get();
        return view('admin.stock.create_stock', ['categories'=>$categories,'sub_categories'=>$sub]);
    }

    public function get_models(Request $request){
        $id = $request->id;
        $sub = DB::table('stock_subcategories')->where('category_id',$id)->get();
        return $sub;
    }

    public function post_create_stock(Request $request){

        try {
            $last_id = DB::table('stocks')->orderBy('id', 'desc')->first()->id;
            $last_id = $last_id + 1;
        } catch (Exception $e) {
            $last_id = 1;
        }

        $make_id = $request->make;
        $make_name = DB::table('stock_categories')->find($make_id)->category_name;

        $stock = new Stock();
        $stock->name = $request->name;
        $stock->price = $request->price;
        $stock->make = $make_name;
        $stock->stock_model = $request->stock_model;
        $stock->year = $request->year;
        $stock->description = $request->description;

        $image_title_1 = '';
        $image_title_2 = '';
        $image_title_3 = '';
        $image_title_4 = '';

        if ($request->hasFile('stock_image')){
            $image = $request->file('stock_image');
            $image_title = $image->getClientOriginalName();
            $image->move(public_path().'/image/stock/'.$last_id.'/',$image_title);
        }

        if ($request->hasFile('stock_image_1')){
            $image_1 = $request->file('stock_image_1');
            $image_title_1 = $image_1->getClientOriginalName();
            $image_1->move(public_path().'/image/stock/'.$last_id.'/',$image_title_1);
        }

        if ($request->hasFile('stock_image_2')){
            $image_2 = $request->file('stock_image_2');
            $image_title_2 = $image_2->getClientOriginalName();
            $image_2->move(public_path().'/image/stock/'.$last_id.'/',$image_title_2);
        }
        if ($request->hasFile('stock_image_3')){
            $image_3 = $request->file('stock_image_3');
            $image_title_3 = $image_3->getClientOriginalName();
            $image_3->move(public_path().'/image/stock/'.$last_id.'/',$image_title_3);
        }
        if ($request->hasFile('stock_image_4')){
            $image_4 = $request->file('stock_image_4');
            $image_title_4 = $image_4->getClientOriginalName();
            $image_4->move(public_path().'/image/stock/'.$last_id.'/',$image_title_4);
        }

        $stock->stock_image = $image_title;
        $stock->image_1 = $image_title_1;
        $stock->image_2 = $image_title_2;
        $stock->image_3 = $image_title_3;
        $stock->image_4 = $image_title_4;

        $stock->status = 'off';
        $stock->save();
        return redirect('/admin/stock')->withSuccess('success');

    }

    public function check_stock(Request $request){
        $id = $request->id;

        $stock = DB::table('stocks')->where('id',$id);

        if ($stock->first()->status == 'on'){
            $stock->update(['status'=>'off']);
        }else{
            $stock->update(['status'=>'on']);
        }
        return 'success';
    }

    public function delete_stock(Request $request){
        $id = $request->id;

        DB::table('stocks')->where('id',$id)->delete();
        return back()->withDelete('success');
    }



    /*
     *  Mechanical Gallery
     * */

    public function mechanical_gallery(){
        $data = DB::table('galleries')->where('sort', 'mechanical')->get();
        $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml'];
        foreach ($data as $datum){
            $contentType = mime_content_type(public_path().'/image/mech_gallery/'.$datum->photo_name);
            if(! in_array($contentType, $allowedMimeTypes) ){
                $datum->extension = 'video';
            }else{
                $datum->extension = 'image';

            }

        }

        return view('admin.mechanical_gallery.lists', ['galleries'=>$data]);
    }

    public function create_mechanical_gallery(Request $request){

        if ($request->hasFile('photos') || $request->hasFile('videos')) {

            foreach ($request->file('photos') as $photo)
            {
                $gallery = new Gallery();

                $photo_name = $photo->getClientOriginalName();
                $photo->move(public_path().'/image/mech_gallery/',$photo_name);

                $gallery->photo_name = $photo_name;
                $gallery->sort = 'mechanical';
                $gallery->status = 'off';
                $gallery->save();
            }
        }

        return back()->withSuccess('success');
    }

    public function check_gallery(Request $request){
        $id = $request->id;

        $gallery = DB::table('galleries')->where('id', $id);

        if ($gallery->first()->status == 'on'){
            $gallery->update(['status'=>'off']);
        }else{
            $gallery->update(['status'=>'on']);
        }
        return 'success';
    }

    public function delete_Mgallery(Request $request){
        $id = $request->id;
        DB::table('galleries')->where('id', $id)->delete();

        return back()->withDelete('success');
    }


    /*
     *  Body Works Gallery
     * */


    public function body_works_gallery(){
        $data = DB::table('galleries')->where('sort', 'body_works')->get();

        $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml'];
        foreach ($data as $datum){
            $contentType = mime_content_type(public_path().'/image/bodyworks_gallery/'.$datum->photo_name);
            if(! in_array($contentType, $allowedMimeTypes) ){
                $datum->extension = 'video';
            }else{
                $datum->extension = 'image';

            }

        }

        return view('admin.body_works_gallery.lists', ['galleries'=>$data]);
    }

    public function create_body_works_gallery(Request $request){

        if ($request->hasFile('photos') || $request->hasFile('videos')){
            // echo($request);
            // exit(0);
            foreach ($request->file('photos') as $photo)
            {

                $gallery = new Gallery();

                $photo_name = $photo->getClientOriginalName();
                $photo->move(public_path().'/image/bodyworks_gallery/',$photo_name);

                $gallery->photo_name = $photo_name;
                $gallery->sort = 'body_works';
                $gallery->status = 'off';
                $gallery->save();
            }
        }

        return back()->withSuccess('success');
    }

    public function check_body_gallery(Request $request){
        $id = $request->id;

        $gallery = DB::table('galleries')->where('id', $id);

        if ($gallery->first()->status == 'on'){
            $gallery->update(['status'=>'off']);
        }else{
            $gallery->update(['status'=>'on']);
        }
        return 'success';
    }

    public function delete_Bgallery(Request $request){
        $id = $request->id;
        DB::table('galleries')->where('id', $id)->delete();
        return back()->withDelete('successs');
    }


    /*
     * Contact Messages
     * */

    public function contact_messages(){
        $data = DB::table('messages')->get();
        // echo($data);
        // exit(0);
        return view('admin.contact_messages.lists', ['messages' => $data]);
        // return view('admin.mechanical_gallery.lists', ['galleries'=>$data]);
    }

    public function change() {
        $data = DB::table('users')->get()->first();
        // print_r($data);
        // exit(0);
        return view('admin.change.list', ['info' => $data]);
    }

    public function update_user_info(Request $request) {
        // echo('ok');
        // exit(0);
        // Validator::make($data, [
        
        //     'email' => 'required|string|email|max:255|unique:users',
        // ]);

        DB::table('users')->update(['email'=>$request->email, 'password'=> Hash::make($request->password)] );
        
        return back();
    }

    // public function update_contact_info(Request $request){

    //     //$data = DB::table('contact_infos')->where('email',$request->email);
    //     //ContactInfo::All()->first()->update(['phone'=>$request->phone, 'email'=>$request->email, 'address'=>$request->address]);

    //     DB::table('contact_infos')->where('id','1')->update(['phone'=>$request->phone, 'email'=>$request->email, 'address'=>$request->address]);
    //     return back();
    // }
}
