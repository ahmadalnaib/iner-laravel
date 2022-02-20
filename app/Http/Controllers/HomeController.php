<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Inertia\Inertia;


class HomeController extends Controller
{


   
    public  function index()
    {

        return Inertia::render('Home');
    }

    public function create(){
        return Inertia::render('Users/Create');
    }

    public function store(Request $request)
    {
        $attributes=$request->validate([
            'name'=>'required',
            'email'=>['required','email'],
            'password'=>'required'
        ]);

       User::create($attributes);
       return redirect('/users');
       

    }

    public function about()
    {

        return Inertia::render('About');
    }

    public function settings()
    {
        return Inertia::render('Settings');
    }

    public function users()
    {
     
        return Inertia::render('Users/Index', [
           'users'=>User::paginate(8)->through(fn($user)=>[
               'id'=>$user->id,
               'name'=>$user->name

           ])
        ]);
    }



}
