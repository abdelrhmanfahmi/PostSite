<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\POST;
use App\Comment;
use App\Student;
use DB;
class Admin extends Controller
{
    public function getFirstPage(){
      return view('first');
    }

    public function getAdminPage(){

      return view('admin');
    }

    public function getPost(){
      //$remember = (request()->has('remember'))? true : false;
      if(auth()->guard('adminGuard')->attempt(['username' => request('name') , 'password' => request('pass')])){
        return redirect('welcome/Admin/' . auth()->guard('adminGuard')->user()->id);
      }else{
        return back();
      }
    }

    public function getuserPage(){
      return view('UsersPages');
    }
   
    public function getPageUserPost(){

       if(auth()->guard('studentGuard')->attempt(['username' => request('names') , 'password' => request('pass')])){
        return redirect('welcome/User/' . auth()->guard('studentGuard')->user()->id);
      }else{
        return back();
      }

    }


    public function setPost(Request $request , $id){

      $ins = Student::find($id);
      $arr = array('ins' => $ins);
      return view('userpage' , $arr);     
  }

  public function addPost(Request $request){

      //if($request->isMethod('POST') && $request->input('insert')){

        $ins = new POST();
        $ins->post = $request->input('POSTS');
        $ins->student_id = $request->input('postid');
        $ins->save();
        return response()->json(['data'=>$request->input('POSTS')]);
        //header('Location:insert/into');
  }

    public function addComment(Request $request , $id){
      $add = POST::find($id);
      $array = array('add' => $add);
      return view('Comments' , $array);
    }

    public function setComment(Request $request){
    
      //if($request->isMethod('POST') && $request->input('commen')){

        $add = new Comment();
        $add->comment=$request->input('comm');
        $add->idpost = $request->input('postId');
        $add->save();
        return response()->json(['msg'=>'success']);

        //return redirect('/comm/');
        //exit();
     // }
    }
  

    public function update(Request $request , $id){

      $upd = Comment::find($id);
      $upd->comment = $request->input('fahmy');
      $upd->save();
      return response()->json(['msg'=>'success']);
    }

    public function getDataStudent(Request $request , $id){
      $get = Student::find($id);
      $arr = array('get' => $get);
      return view('AdminPage' , $arr);
    }

    public function DeleteUser(Request $request , $id){
      $del = POST::find($id);
      $del->delete();
      return redirect('welcome/Admin/' . auth()->guard('adminGuard')->user()->id);
    }

    public function UpdateUser(Request $request , $id){
      $upda = POST::find($id);
      $upda->post = $request->input('NewPost');
      $upda->save();
      return redirect('welcome/Admin/' . auth()->guard('adminGuard')->user()->id);
    }

    public function getupdated(Request $request , $id){
      $getso = POST::find($id);
      $array = array('getso' => $getso);
      return view('updatePost' , $array);
    }

    public function getDataComment(Request $request , $id){
      $data = POST::find($id);
      $arr = array('data' => $data);
      return view('updateComment' , $arr);
    }

    public function DeleteComment(Request $request , $id){
      $del = Comment::find($id);
      $del->delete();
      return redirect('welcome/Admin/' . auth()->guard('adminGuard')->user()->id); 
    }

    public function getsUpdatesComments(Request $request , $id){
      $update = Comment::find($id);
      $array = array('update' => $update);
      return view('UPDATESComments' , $array);
    }

    public function updcomm(Request $request , $id){
      $up = Comment::find($id);
      $up->comment = $request->input('commentss');
      $up->save();
      return redirect('welcome/Admin/' . auth()->guard('adminGuard')->user()->id); 
    }

}
