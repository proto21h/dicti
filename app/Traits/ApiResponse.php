<?php

namespace App\Traits;

use Response;

/**
 * 
 */
trait ApiResponse
{
    /**
     * @param $result
     * @param $message
     * @param $code
     * @return mixed
     */
    public function sendResponse($result, $message, $code)
    {
        return Response::json(self::makeResponse($message, $result), $code);
    }

    /**
     * @param $result
     * @param $message
     * @param $code
     * @return mixed
     */
    public function sendError($error,$code = 400, $data = [])
    {
        return Response::json(self::makeError($error, $data), $code);
    }

    public function makeResponse($message, $data)
    {
        return [
            'success' => true,
            'data' => $data,
            'message' => $message,
        ];
    }
}
