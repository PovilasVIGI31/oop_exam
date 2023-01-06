<?php
declare(strict_types=1);

namespace Pavelas\OopTest\Controllers;

use Pavelas\OopTest\Interfaces\ElectricityControllerInterface;
use Pavelas\OopTest\Repositories\ElectricityRepository;

class ElectricityController implements ElectricityControllerInterface
{
    public function __construct(private ElectricityRepository $repository)
    {
    }

    public function list()
    {
        $sum = 0;
        $electricities = $this->repository->getAll();
        $sum = $this->repository->sum($electricities);
        $sumDay = $this->repository->sumDay($electricities);
        $sumNight = $this->repository->sumNight($electricities);
        require 'oop_test/view/sum.php';
    }

    public function create()
    {
        $this->repository->create($_POST);
    }

    public function delete()
    {
        $this->repository->delete($_POST);
        require 'oop_test/view/homepage.php';
    }

}