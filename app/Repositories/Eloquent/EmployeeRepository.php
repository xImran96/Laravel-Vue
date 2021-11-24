<?php
namespace App\Repositories\Eloquent;
use App\Models\Employee;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\EmployeeRepositoryInterface;


class EmployeeRepository extends BaseRepository implements EmployeeRepositoryInterface {


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

    public function __construct(Employee $model)
    {
    	$this->model = $model;
    }

}




?>