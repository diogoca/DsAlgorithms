<?php

namespace DsAlgorithms\Ds\DsList;

class ArrayList
{

    const INITIAL_SIZE = 10;

    /**
     * Data array with fixed length
     *
     * @param \SplFixedArray
     */
    private $data;

    /**
     * Index of last element added
     *
     * @var
     */
    private $last;
    

    public function __construct()
    {
        $this->data = new \SplFixedArray(self::INITIAL_SIZE);
        $this->last = -1;
    }

    private function resize()
    {
        $doubleSize = ($this->last + 1) * 2;
        $doubleData = new \SplFixedArray($doubleSize);

        for ($i = 0; $i <= $this->last; $i++) {
            $doubleData[$i] = $this->data[$i];
        }

        $this->data = $doubleData;
    }

    public function add($data)
    {
        $this->data[$this->last + 1] = $data;
        $this->last++;

        if (($this->last + 1) % self::INITIAL_SIZE === 0) {
            $this->resize();
        }
    }

    private function arrangeToLeft($begin)
    {
        for ($i = $begin; $i <= $this->last; $i++) {
            $this->data[$i] = $this->data[$i + 1];
        }
    }

    public function remove($index)
    {
        if ($index > $this->last) {
            throw new \OutOfRangeException;
        }

        $this->data[$index] = null;
        $this->arrangeToLeft($index);
        $this->last--;
    }

    public function get(int $index)
    {
        if ($index > $this->last) {
            throw new \OutOfRangeException;
        }

        return $this->data[$index];
    }

    public function set(int $index, $data)
    {
        if ($index > $this->last) {
            throw new \OutOfRangeException;
        }

        $this->data[$index] = $data;
    }

    public function clear()
    {
        $this->__construct();
    }

    public function size()
    {
        return $this->last + 1;
    }

    public function __toString()
    {
        $toString = '[';

        for ($i = 0; $i < $this->size(); $i++) {
            $toString .= $this->data[$i];

            if ($i !==  $this->size() - 1) {
                $toString .= ', ';
            }
        }

        $toString .= ']';
        
        return $toString;
    }
}

// $list = new ArrayList();
// $list->add('foo');
// $list->add('bar');
// $list->add('x');
// $list->add('y');
// $list->add('z');

// echo $list . PHP_EOL; # [foo, bar, x, y, z]
// echo $list->get(1) . PHP_EOL; # bar
// $list->remove(2);
// echo $list . PHP_EOL; # [foo, bar, y, z]
