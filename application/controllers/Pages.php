<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 *
 */
class Pages extends CI_Controller {

  public function index(){
    $this->load->view('login');
  }

  public function dashboard(){
    $this->template->display('dashboard');
  }

  public function form(){
    $this->template->display('pages/form');
  }

  public function table(){
    $this->template->display('pages/table');
  }



}
