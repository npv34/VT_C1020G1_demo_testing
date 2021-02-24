<?php


class Triangle
{
    public $a;
    public $b;
    public $c;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function check()
    {
        if ($this->isTriangle()) {
            if ($this->isIsoscelesTriangle()) {
                return 'La tam giac can';
            }

            return 'La tam giac';
        }
        return 'Khong la tam giac';
    }

    /**
     * @return bool
     */
    public function isIsoscelesTriangle(): bool
    {
        return $this->a == $this->b
            || $this->b == $this->c
            || $this->c == $this->a;
    }

    /**
     * @return bool
     */
    public function isTriangle(): bool
    {
        return $this->a + $this->b > $this->c
            && $this->a + $this->c > $this->b
            && $this->b + $this->c > $this->a;
    }


}