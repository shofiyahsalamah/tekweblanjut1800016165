<?php

namespace App\Controllers;

class User extends BaseController
{
   public function index()
   {
      if (session()->get('user_nama') == '') {
         session()->setFlashdata('gagal', 'silahkan login terlebih dahulu');
         return redirect()->to(base_url('login'));
      }
      return view('user_view');
   }

   //--------------------------------------------------------------------

}