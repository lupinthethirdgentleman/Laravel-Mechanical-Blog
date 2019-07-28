<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function mechanical(){
        $info = DB::table('contact_infos')->where('id','1')->get()->first();
        $galleries = DB::table('galleries')->where('sort', 'mechanical')->where('status', 'on')->get();
//        foreach ($galleries as $gallery){
//            $size = getimagesize(public_path().'/image/mech_gallery/'.$gallery->photo_name);
//            echo json_encode($size[3]);
//            print_r($size);
//        }

        $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml'];
        foreach ($galleries as $gallery){
            $contentType = mime_content_type(public_path().'/image/mech_gallery/'.$gallery->photo_name);
            if(! in_array($contentType, $allowedMimeTypes) ){
                $gallery->extension = 'video';
            }else{
                $gallery->extension = 'image';

            }
        }

        $n = intdiv(count($galleries),6);

        return view('front.mechanical',['contact'=>$info, 'galleries'=>$galleries, 'n'=>$n]);
    }

    public function tyres(){
        $info = DB::table('contact_infos')->where('id','1')->get()->first();
        return view('front.tyres', ['contact'=>$info]);
    }

    public function body_works(){
        $info = DB::table('contact_infos')->where('id','1')->get()->first();
        $galleries = DB::table('galleries')->where('sort', 'body_works')->where('status', 'on')->get();

        $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml'];
        foreach ($galleries as $gallery){
            $contentType = mime_content_type(public_path().'/image/bodyworks_gallery/'.$gallery->photo_name);
            if(! in_array($contentType, $allowedMimeTypes) ){
                $gallery->extension = 'video';
            }else{
                $gallery->extension = 'image';

            }
        }

        $n = intdiv(count($galleries),6);

        return view('front.body_works', ['contact'=>$info, 'galleries'=>$galleries, 'n'=>$n]);
    }

    public function toyota_spares(){
        $info = DB::table('contact_infos')->where('id','1')->get()->first();
        return view('front.toyota_spares', ['contact'=>$info]);
    }



    public function contact(){
        $data = DB::table('contact_infos')->get()->first();
        return view('front.contact', ['contact'=>$data]);
    }

    public function post_message(Request $request){
//        \Monolog\Handler\mail()
        $data = new Message();
        $data->first_name = $request->first_name;
        $data->last_name = $request->last_name;
        $data->contact_No = $request->contact_no;
        $data->make = $request->make;
        $data->m_model = $request->model;
        $data->year = $request->year;
        $data->datetime = $request->datetime;
        $data->save();
        return back();
    }



    public function troubleshooting(){
        $info = DB::table('contact_infos')->where('id','1')->get()->first();
        return view('front.troubleshooting', ['contact'=>$info]);
    }

    public function stock(){
        $info = DB::table('contact_infos')->where('id','1')->get()->first();
        $stocks = DB::table('stocks')->where('status', 'on')->get();
        return view('front.stock' ,['contact'=>$info,'stocks' => $stocks]);
    }

}
