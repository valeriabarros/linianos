<?php

namespace Test;

use App\Linianos;

use PHPUnit\Framework\TestCase;


class LinianosTest extends TestCase
{
    /**
     * Testing the order of the fisrt 15 values.
     *
     * @return void
     */
    public function testOrder()
    {
        $linios = new Linianos();
        
        $expectedResults = array(
            1, 2, 'Linio', 4, 'IT',
            'Linio', 7, 8, 'Linio', 'IT',
            11, 'Linio', 13, 14, 'Linianos'
        );

        $testResults = $linios->output();
        $partialResults = array_slice($testResults, 0, 15);
        $this->assertEquals($expectedResults, $partialResults);
    }
}