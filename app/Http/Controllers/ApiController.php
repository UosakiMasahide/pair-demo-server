<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index1()
    {
        return response()->json(
            [
                'message' => '正常に処理が完了しました。',
            ],
            200
        );
    }

    public function index2()
    {
        sleep(3);
        return response()->json(
            [
                'text1' => 'おはよう',
                'text2' => 'こんにちは',
                'text3' => 'こんばんは',
                'text4' => 'さようなら',
            ],
            200
        );
    }

    public function index3()
    {
        // throw new \Exception('error');
        return response()->json(
            [
                'message' => '正常に処理が完了しませんでした。',
            ],
            422
        );
    }
}
