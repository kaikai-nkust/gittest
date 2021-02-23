<?php

namespace App\Traits;

trait ApiResponseTrait{
    //定義統一例外的回應方法
    public function errorResponse($message,$status,$code=null){
        $code=$code??$status;//為null時預設的HTTP狀態碼
        return response()->json(
          [
              'message'=>$message,
              'code'=>$code
          ],
          $status
        );
    }
}
