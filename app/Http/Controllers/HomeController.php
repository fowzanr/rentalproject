<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Insertmode;
use App\bookModel;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function book($id){
        $upda= Insertmode::find($id);
        return view("auth.booknow", compact('upda', 'id'));
    }
    public function edit(Request $req){
        $edit = new bookModel();
        $edit->fname=$req->name;
        $edit->cnum=$req->phn;
        $edit->carname=$req->carTitle;
        $edit->rupees=$req->rupees;
        $edit->BookDays=$req->rent;
        $edit->save();
        return redirect("home")->with('edit', 'Car Booked Success');
    }
}
