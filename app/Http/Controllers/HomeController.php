<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
   public function store(){
    //    return inertia::render('create');
       return Inertia::render('Create Product');
   }
   public function save(){
      //    return inertia::render('create');
         return Inertia::render('create customer');
     }
   public function show(){
      return Inertia::render('Table');
   }  
   public function customer(){
      return Inertia::render('customers');
   }
   public function ads(){
       return Inertia::render('Newdashboard');
   }
   public function Table(){
       return Inertia::render('Brand');
   }

    public function dev(){
        return Inertia::render('Categories_form');
    }
}
