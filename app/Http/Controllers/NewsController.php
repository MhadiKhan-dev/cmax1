<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){

      $data['title'] = 'News';
      return view('news.add', $data);
    }











}
