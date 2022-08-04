<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jorenvh\Share\Share;
use Illuminate\Support\Facades\Route;

class ShareSocialController extends Controller
{
    public function shareSocial()
    {
        $socialShare = \Share::page(
            'https://codeplaners.com/',
            'Code Planers',
        )
        ->facebook()
        ->twitter()
        ->reddit()
        ->linkedin()
        ->whatsapp()
        ->telegram();
          
        return view('produk.share', compact('socialShare'));
    }
}
