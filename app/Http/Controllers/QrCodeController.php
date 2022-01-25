<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use App\Profile;

class QrCodeController extends Controller
{
    public function index()
    {
      return view('qrcode');
    }
}
