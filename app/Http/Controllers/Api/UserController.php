<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Places;
use Illuminate\Http\Request;
use Cache;

final class UserController extends Controller
{
    /**
     * Save user
     */
    public function createUser(Request $request)
    {
        abort(404);
        /*$validatorMsg = responseValdiator(['partnerId', 'productGroupId', 'designId', 'customerToken']);
        if ($validatorMsg) {
            return errorResponse(400, $validatorMsg);
        } else {
            return (new DesignCanvaRepository())->saveDesign($request);
        }*/
    }

    /**
     * get user
     */
    public function getUsers()
    {
        return Cache::remember('get-users', now()->addDays(30), function () {
            $users = Places::getByVisited();
            return $users;
        });
    }
}
