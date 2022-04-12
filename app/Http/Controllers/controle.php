<?php

namespace App\Http\Controllers;

class controle extends Controller{
  public function index() {
    return view('layout/index');
  }
  public function login() {
    return view('layout/login');
  }
  public function register() {
    return view('layout/register');
  }
  public function comment() {
    return view('layout/comment');
  }
  public function add() {
    return view('layout/add');
  }
  public function edit() {
    return view('layout/edit');
  }
  public function admin() {
    return view('layout/admin');
  }
}
