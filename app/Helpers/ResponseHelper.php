<?php
namespace App\Helpers;

use Illuminate\Pagination\LengthAwarePaginator;

class ResponseHelper {
    public static function success($message = 'success', $data = [], $code = 200)
    {
        if($data instanceof LengthAwarePaginator){
            $path = $data->path();
            $next_page_url = $data->currentPage() < $data->lastPage() ? $path . '?page=' . $data->currentPage() +1 : null;
            $prev_page_url = $data->currentPage() > 1 ? $path . '?page=' . $data->currentPage() - 1 : null;
            $last_page_url = $path . '?page=' . $data->lastPage();
            $first_page_url = $path . '?page=' . 1;
            return response()->json([
                'success' => true,
                'message' => $message,
                'data' => $data->all(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'next_page_url' => $next_page_url,
                'prev_page_url' => $prev_page_url,
                'last_page_url' => $last_page_url,
                'first_page_url' => $first_page_url
            ], $code);
        }
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