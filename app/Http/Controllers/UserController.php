<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Controllers\BaseController as BaseController;


class UserController extends BaseController
{
    public $theUserService;



    function __construct(UserService $userService){
        $this->theUserService = $userService;
    }


    public function register(Request $request)
    {
            try{

            $response = $this->theUserService->register($request);

            }catch(Exception $e){
                  return $this->sendError($e->getMessage(), []);
            }

            return $this->sendResponse($response, 'User registered successfully.');

    }




    public function login(Request $request){

        try{

            $response = $this->theUserService->login($request);

        }catch(Exception $e){
            
            return $this->sendError($e->getMessage(), []);
        
        }
        return $this->sendResponse($response, 'User login successfully.');
    }

    public function logout()
    {
        return "it works";
        // request()->user()->currentAccessToken()->delete();
        // return response()->json(['status'=>'true']);   
    }

}
