<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function  index(Request $request)
    {
        $dataRequest = $request->all();
        $response = [];
        $card =  new Card();
        $card->card_code = $dataRequest['code'];
        $card->card_seri = $dataRequest['seri'];
        $card->money = $dataRequest['money'];
        if ($card->save()) {
           $response['status']=1;
           $response['message'] = 'Nạp thẻ mệnh giá '.number_format($dataRequest['money']).' thành công';
        } else {
            $response['status']=4;
            $response['message'] = 'Lỗi xử lý';
        }

        return response()->json($response);


    }
}
