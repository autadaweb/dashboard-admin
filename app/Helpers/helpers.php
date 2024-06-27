<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function Laravel\Prompts\table;
use Illuminate\Support\Facades\Auth;

function encode($data)
{
    if($data == ''){
        return '';
    }


        return strtr( base64_encode($data), '+/=', '-_,' );

    
}




    function site_active($route, $action = 'actip')
    {
        return request()->is($route) ? $action : '' ;
    }




    function notif(){

        if(session('success')){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            '. session('success') .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }


        if(session('warning')){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '. session('warning') .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        }

        if(session('error')){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            '. session('error') .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        }
        
    }



   



    function enc($plaintext) {
        $key = env('AES_128_KEY');
        $iv = env('AES_128_IV');
        $ciphertext = openssl_encrypt($plaintext, 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);
        $ciphertext_base64 = base64_encode($ciphertext);
        return $ciphertext_base64;
    }

    
    function dec($ciphertext_base64) {
        $key = env('AES_128_KEY');
        $iv = env('AES_128_IV');
        $ciphertext = base64_decode($ciphertext_base64);
        $plaintext = openssl_decrypt($ciphertext, 'aes-128-cbc', $key, OPENSSL_RAW_DATA, $iv);
        return $plaintext;
    }


