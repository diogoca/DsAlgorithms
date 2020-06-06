# Data structures and Algorithms
Data Structures and Search, Sort and String Algorithms implemented using PHP, the goal of this project it's the study of them. Please let me know any mistake opening an issue.

## Installation

It's recommended that you use [Composer](https://getcomposer.org/) to install.

````bash
$ composer require diogoca/dsalgorithms
````

## Using

### ArrayList
````php
use DsAlgorithms\Ds\DsList\ArrayList;

$list = new ArrayList();
$list->add('foo');
$list->add('bar');
$list->add('oof');
$list->add('rab');
$list->add('barack');

print_r($list);

var_dump($list->get(1));

$list->remove(2);

print_r($list);
````

### Search
Comparing what algorithm do less calls.
````php
use DsAlgorithms\Search\BinarySearch;
use DsAlgorithms\Search\SequentialSearch;

$arr = \range(7, 14);
$arrCopy = $arr;

var_dump(BinarySearch::search($arr, 14));
var_dump(BinarySearch::$calls);

var_dump(SequentialSearch::search($arrCopy, 14));
var_dump(SequentialSearch::$calls);
````

## Notes
* On DsAlgorithms\Ds\DsList namespace I'm not using List as name once that's a PHP reserved word.
* On DsAlgorithms\Ds\DsList\ArrayList I'm using \SplFixedArray once that on PHP I can't create an array with fixed size

## License
[MIT license](https://opensource.org/licenses/MIT)