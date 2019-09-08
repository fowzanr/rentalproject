<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insertmode;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
           return view('admin.home');
    }
    public function show(){
        return view('admin.show');
    }
    public function list(){
        return view('admin.list');
    }
    public function select(){
        return view('admin/select');
    }
    
    
    public function insert(Request $req){
    //image code    
        $file=$req->file;
        $image=$file->getClientOriginalName();
        $file->move('images/', $image);
      //end image code

        $select=new Insertmode();
        $select->fname=$req->fname;
        $select->lname=$req->lname;
        $select->imagee='/images/'.$image;
        $select->cartitle=$req->carTitle;
        $select->rentdays=$req->se;
        $select->rupees=$req->price;
        $select->save();
        return redirect("admin/home")->with('success','Data Upload successfully');


    }
    public function update($id){
        $upda= Insertmode::find($id);
        return view("admin.select", compact('upda', 'id'));
    }
    public function book($id){
        $upda= Insertmode::find($id);
        return view("auth.booknow", compact('upda', 'id'));
    }
    public function delete($id)
    {
        $delete = Insertmode::find($id);
        $delete->delete();
        return redirect("admin/home");
    }
    public function edit(Request $req){
        $edit = Insertmode::find($req->id);
        $edit->cartitle=$req->carTitle;
        $edit->save();
        return redirect("admin/show")->with('edit', 'edit success');
    }
    protected function guard()
    {
        return Auth::guard('admin');
    }
}
