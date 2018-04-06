<?php

namespace App;

/**
 * Linio, IT or Linianos?
 * 
 * @author Val Barros <valeriabarros.ifg@gmail.com>
 */
class Linianos
{
    private $pattern;
    private $result;

    /**
     * Construct patterns and results.
     */
    public function __construct()
    {
        $this->pattern = ['', '', 'Linio', '', 'IT', 'Linio', '', '', 'Linio', 'IT', '', 'Linio', '', '', 'Linianos'];
        $this->result = array();
    }
    /**
     * Process the data and calculates the correspondent values.
     *
     * @return array
     */
    private function process()
    {
        for ($i = 1; $i <= 100; $i++) {
            $list = $this->pattern[($i - 1) % 15];
            if (!empty($list)) {
                $this->result[] = $list;
                continue;
            }
            $this->result[] = $i;
        }
        return $this->result;
    }
    /**
     * Access the function that calculates the multiplies,
     * print all values from 1 to 100 and return an array
     * with the values.
     *
     * @return array
     */
    public function output()
    {
        $data = array();
        $data = $this->process();
        foreach ($data as $value) {
            echo $value . PHP_EOL;
        }
        return $data;
    }
}