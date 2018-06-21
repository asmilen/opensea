<?php
/**
 * Created by PhpStorm.
 * User: DiemND
 * Date: 3/21/2018
 * Time: 9:25 AM
 */

namespace App\Http\Middleware;


class TokenApi
{
    public function handle($request, \Closure $next)
    {
        $input = $request->all();
        if (isset($input['token']) && $input['token'] == config('auth.tokenApi')) {
            return $next($request);
        }
        return response()->json([
            'status' => 'fail',
            'message' => 'Invalid token api!'
        ]);
    }
}