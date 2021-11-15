<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Illuminate\Support\Facades\Hash;

class UserService
{
	
	protected $userRepository;

 	public function __construct(UserRepositoryInterface $userRepository)
	{
		$this->userRepository = $userRepository;
	}


	public function register(Request $request){


			try {

				$validator = Validator::make($request->all(), [
                'name'      => 'required|string',
                'email'     => 'required|string|unique:users,email',
                'password'  => 'required|string',

            ]);

			if($validator->fails()){
				throw new InvalidArgumentException($validator->errors()->first());
				
			}

			$user = $this->userRepository->create([
						'name'=> $request->name,
						'email'=> $request->email,
						'password'=> Hash::make($request->email)
					]);

				return $user;

			}catch(Exception $e){
				throw new InvalidArgumentException($e->getMessage());
			}

	}



	public function login(Request $request)
	{
		try {

			$validator = Validator::make($request->all(), [
                'email'     => 'required|string',
                'password'  => 'required|string',
            ]);

            if($validator->fails()){
				throw new InvalidArgumentException($validator->errors()->first());
			}


			$user = $this->userRepository->findByColumnOr(['email' => $request->email], ['*'], []);

			// if(!$user || !Hash::check($request->password, $user->password)) {
   //              throw new InvalidArgumentException('Invalid credentials');
   //          }

            return $token = $user->createToken('imrania');


		}catch(Exception $e){

			throw new InvalidArgumentException($e->getMessage());

		}
	}
	
}







































?>