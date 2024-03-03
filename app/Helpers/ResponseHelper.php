<?php
namespace App\Helpers;

class ResponseHelper {
    public static function success($message = 'success', $data = [], $code = 200)
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    public static function badRequest($message = 'an error occurred', $code = 400)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $code);
    }

    public static function error($message = 'an error occurred', $error = null, $code = 500)
    {
        if(config('app.env') !== 'production'){
            return response()->json([
                'success' => false,
                'message' => $message,
                'error' => $error
            ], $code);
        }
        return response()->json([
            'success' => false,
            'message' => 'an error ocurred',
            'error' => 'internal server error'
        ], $code);
    }
}