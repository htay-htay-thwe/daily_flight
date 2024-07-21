<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostCreationController extends Controller
{

    public function dashboard(){
        return view('post.postCreate');
    }

    public function addFlight(Request $request){
        $validator =Validator::make($request->all(), [
            'date'=>'required',
            'image'=>'required',
            'fromTime'=>'required',
            'toTime'=>'required',
            'price'=>'required',
            'from'=>'required',
            'to'=>'required',
            'class'=>'required'
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = $this->createAddFlight($request);

        return back();
    }

    private function createAddFlight($request){
        return[
            'date'=>$request->date,
            'image'=>$request->image,
            'fromTime'=>$request->fromTime,
            'toTime'=>$request->toTime,
            'price'=>$request->price,
            'from'=>$request->from,
            'to'=>$request->to,
            'class'=>$request->class
        ];
    }

}
