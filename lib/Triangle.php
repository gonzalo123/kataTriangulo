<?php

class Triangle
{
    private $leg;

    public function __construct($leg)
    {
        $this->leg = $leg;
    }

    public function draw()
    {
        $out = array();
        foreach (range(1, $this->leg) as $i) {
            $out[] = str_repeat('*', $i);
        }

        return $out;
    }
}
