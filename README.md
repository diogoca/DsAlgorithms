# Data structures and Algorithms
Data Structures and Search, Sort, Numbers and String Algorithms implemented using PHP, the goal of this project it's the study and practice of them. Please let me know any mistake opening an issue.

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
$list->add('x');
$list->add('y');
$list->add('z');

echo $list . PHP_EOL; # [foo, bar, x, y, z]
echo $list->get(1) . PHP_EOL; # bar
$list->remove(2);
echo $list . PHP_EOL; # [foo, bar, y, z]
````

### Search
Comparing what algorithm do less calls.
````php
use DsAlgorithms\Search\BinarySearch;
use DsAlgorithms\Search\SequentialSearch;

$arr = \range(7, 14);
$arrCopy = $arr;

print_r($arr);

echo '14 in index ' . BinarySearch::search($arr, 14) . PHP_EOL;
echo 'binary search calls ' . BinarySearch::$calls . PHP_EOL; 

echo '14 in index ' . SequentialSearch::search($arr, 14) . PHP_EOL; 
echo 'sequencial search calls ' . SequentialSearch::$calls . PHP_EOL;
````

## Running from bash
````bash
$ php public/index.php src/String/MaximumOccurringCharacter.php
````

## Notes
* On DsAlgorithms\Ds\DsList namespace I'm not using List as name once that's a PHP reserved word
* I'm using \SplFixedArray once that on PHP I can't create an array with fixed size

## License
[MIT license](https://opensource.org/licenses/MIT)