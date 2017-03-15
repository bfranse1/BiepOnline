<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ReturnController extends Controller
{
  public function index()
  {
      return view('admin.returnbooks');

  }
  public function store()
  {

  }
  public function edit()
  {

  }
}
