<?php

use Illuminate\Http\JsonResponse;

if (! function_exists('errorResponse')) {
    /**
     * Return API error response
     */
    function errorResponse(int $code = 200, string $message = null, string $error = null)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
            'error' => $error,
        ], $code);
    }
}

if (! function_exists('responseValdiator')) {
    function responseValdiator(array $params)
    {
        $msg = null;
        foreach ($params as $value) {
            if (! isset(Request()->$value)) {
                $msg = "Missing required parameter: $value";
            }
        }

        return $msg;
    }
}

if (! function_exists('unexpectedPropertValdiator')) {
    function unexpectedPropertValdiator(array $requiredParams, array $optionalParams = [])
    {
        $data = Request()->all();
        foreach ($data as $key => $value) {
            if (! in_array($key, $requiredParams) && ! in_array($key, $optionalParams)) {
                return $key;
            }
        }

        return null;
    }
}

if (! function_exists('jsonResponse')) {
    /**
     * Fix when we set JSON response before controller
     * @param mixed $response Array or \Illuminate\Http\JsonResponse
     */
    function jsonResponse($response, int $code = 200): JsonResponse
    {
        if ($response instanceof \Illuminate\Http\JsonResponse) {
            return $response;
        } else {
            return response()->json($response, $code);
        }
    };
}
