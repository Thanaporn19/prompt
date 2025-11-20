<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');  // ชี้ไปยังไฟล์ home.php ของเรา
    }
}
