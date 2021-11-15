<?php
namespace App\Repositories\Eloquent;
use App\Models\User;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\UserRepositoryInterface;


class UserRepository extends BaseRepository implements UserRepositoryInterface {


	/**
	 * @var Model 
	 * 
	 */	
	protected $model;

    /**
     * User constructor
     * 
     * @param User $model
     */

    public function __construct(User $model)
    {
    	$this->model = $model;
    }

}




?>