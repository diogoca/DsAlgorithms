<?php

namespace DsAlgorithms\Ds\Tree;

use DsAlgorithms\Ds\Queue\LinkedQueue;

class BinaryTree implements Tree
{
    /**
     * @var Node
     */
    public $root;

    /**
     * Number of nodes
     *
     * @var int
     */
    private $size;

    /**
     * Queue for BFS search
     *
     * @var LinkedQueue
     */
    private $queue;

    public function add(Node &$node = null, string $data)
    {
        if ($node === null) {
            $node = new Node($data);
            $this->size++;
            return;
        }
        if (\ord($data) > \ord($node->data)) {
            $this->add($node->right, $data);
        } else {
            $this->add($node->left, $data);
        }
    }

    public function maximumDepth(&$node)
    {
        if ($node === null) {
            return 0;
        }

        $maxLeft = 1 + $this->maximumDepth($node->left);
        $maxRight = 1 + $this->maximumDepth($node->right);

        return max($maxLeft, $maxRight);
    }

    public function levelOrderTransversal(Node &$node) : array
    {
        if ($node === null) {
            return [];
        }

        $levelOrder = [];
        $level = -1;
        $last = $node;

        $lastAdded = new \SplObjectStorage;
        $lastAdded[$node] = 1;

        $this->queue = new LinkedQueue;
        $this->queue->enqueue($node);

        while (!$this->queue->isEmpty()) {
            $dequeued = $this->queue->dequeue();
            
            if ($dequeued === $last) {
                $lastAdded[$last] = 1;
                $level++;
            }

            $levelOrder[$level][] = $dequeued->data;

            if ($dequeued->left) {
                $this->queue->enqueue($dequeued->left);

                if (isset($lastAdded[$last])) {
                    $last = $dequeued->left;
                }
            }
            if ($dequeued->right) {
                $this->queue->enqueue($dequeued->right);

                if (isset($lastAdded[$last])) {
                    $last = $dequeued->right;
                }
            }
        }

        return $levelOrder;
    }

    public function breathFirstSearch(Node &$node = null, $needle)
    {
        if ($node === null || empty($needle)) {
            return;
        }

        $this->queue = new LinkedQueue;
        $this->queue->enqueue($node);

        while (!$this->queue->isEmpty()) {
            $dequeued = $this->queue->dequeue();

            echo "{$dequeued->data} ";

            if ($dequeued->data === $needle) {
                return $dequeued;
            }

            if ($dequeued->left) {
                $this->queue->enqueue($dequeued->left);
            }
            if ($dequeued->right) {
                $this->queue->enqueue($dequeued->right);
            }
        }
    }

    public function depthFirstSearch(Node &$node = null, $needle)
    {
        if ($node === null) {
            return null;
        }
        
        echo "{$node->data} ";

        if ($node->data === $needle) {
            return $node;
        }

        $this->depthFirstSearch($node->left, $needle);
        $this->depthFirstSearch($node->right, $needle);
    }

    public function preOrder(Node &$node = null)
    {
        if ($node === null) {
            return;
        }

        echo "$node->data ";
    
        $this->preOrder($node->left);
        $this->preOrder($node->right);
    }
    
    public function inOrder(Node &$node = null)
    {
        if ($node === null) {
            return;
        }

        $this->inOrder($node->left);
        echo "$node->data ";
        $this->inOrder($node->right);
    }

    public function postOrder(Node &$node = null)
    {
        if ($node === null) {
            return;
        }
        
        $this->postOrder($node->left);
        $this->postOrder($node->right);

        echo "$node->data ";
    }

    public function __toString()
    {
    }
}

// $tree = new BinaryTree;
// $tree->add($tree->root, 'F');
// $tree->add($tree->root, 'B');
// $tree->add($tree->root, 'G');
// $tree->add($tree->root, 'A');
// $tree->add($tree->root, 'I');
// $tree->add($tree->root, 'D');
// $tree->add($tree->root, 'H');
// $tree->add($tree->root, 'C');
// $tree->add($tree->root, 'E');

// echo PHP_EOL . "preorder: \t\t\t";
// $tree->preOrder($tree->root);

// echo PHP_EOL . "inorder: \t\t\t";
// $tree->inOrder($tree->root);

// echo PHP_EOL . "postorder: \t\t\t";
// $tree->postOrder($tree->root);

// echo PHP_EOL . "breathFirstSearch for I: \t";
// $tree->breathFirstSearch($tree->root, 'I');

// echo PHP_EOL . "depthFirstSearch for I: \t";
// $tree->depthFirstSearch($tree->root, 'I');

// echo PHP_EOL . "Maximum Depth: \t";
// echo $tree->maximumDepth($tree->root);

// echo PHP_EOL . "levelOrderTransversal: \t";
// print_r($tree->levelOrderTransversal($tree->root));


// echo PHP_EOL;

// $symmetricTree = new BinaryTree;
// $symmetricTree->add($symmetricTree->root, 'B');
// $symmetricTree->add($symmetricTree->root, 'A');
// $symmetricTree->add($symmetricTree->root, 'C');

// echo PHP_EOL . "levelOrderTransversal: \t";
// print_r($symmetricTree->levelOrderTransversal($symmetricTree->root));
