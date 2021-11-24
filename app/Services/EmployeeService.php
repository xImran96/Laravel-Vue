<?php

namespace App\Services;

use App\Repositories\EmployeeRepositoryInterface;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;
use Illuminate\Support\Facades\Hash;

class EmployeeService
{
	
	protected $employeeRepository;

 	function __construct(EmployeeRepositoryInterface $employeeRepository)
	{
		$this->employeeRepository = $employeeRepository;
	}

    public function all()
    {
        return $this->employeeRepository->all(['*'], ['user']);
    }

	
}







































?>