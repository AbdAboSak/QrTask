<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GenerateQrCode extends Controller
{
    public function generate(Request $request)
    {
        $num = $request->numberQr;
        $prefix = $request->prefix;
        $name = $prefix . generateRandomString();
        $color = $request->color;
        list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");//change color form RGB Hex To RGb
        $qrCodes = array();     // init array to create multi qrCode
        for ($i = 0; $i < $num; $i++) {
//            $qrcode = QrCode::size(100)->Color($r, $g, $b)->generate($name);
            $qrcode = QrCode::format('png');
            array_push($qrCodes, $qrcode);

        }

        print_r($qrCodes);
        return view('viewQr', compact('qrCodes', 'color'));
    }


    public function exportPdf($arr){
    dd($arr);
    return 'ss';
    }

}

//Generate Random String" Uniqe"
function generateRandomString($length = 256)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwdwDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

