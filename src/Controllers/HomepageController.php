<?php
declare(strict_types=1);

namespace Pavelas\OopTest\Controllers;

class HomepageController
{
    public function show(): void
    {
        require 'oop_test/view/homepage.php';
    }
}