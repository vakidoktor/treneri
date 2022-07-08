<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Places;
use Illuminate\Http\Request;

final class UserController extends Controller
{
    /**
     * Save canva design from the editor - initial load
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
     * Save Canva design and redirect to configurator
     */
    public function getUsers()
    {
        $users = Places::getByVisited();
        return $users;
    }
}
