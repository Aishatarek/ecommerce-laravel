<?php

namespace App\Http\Controllers\API;

trait ApiResponseTrait{
    public function ApiResponse($data=null,$msg=null,$status=null){
       $res=[
            'data' => $data ,
            'msg'=>$msg,
            'status' => $status
        ];
        return response($res);
    }
}