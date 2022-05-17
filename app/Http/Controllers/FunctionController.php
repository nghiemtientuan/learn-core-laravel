<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;

class FunctionController extends Controller
{
    public function getHashingFunction()
    {
        $encrypt = Crypt::encryptString('tuntun');

        try {
            $decrypted = Crypt::decryptString($encrypt);

            dd($encrypt, $decrypted);
        } catch (DecryptException $e) {
            dd($e);
        }
    }
}
