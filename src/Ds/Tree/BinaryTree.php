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

    public function breathFirstSearch(Node &$node = null, $level)
    {
       $queue = new LinkedQueue;
       $queue->enqueue($node->data);

       while(!$queue->isEmpty()) {

            if ($node->left) {
                $queue->enqueue($node->left->data);
            }
            if ($node->right) {
                $queue->enqueue($node->right->data);
            }

            $node = $node->left;
       }
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

$tree = new BinaryTree;
$tree->add($tree->root, 'F');
$tree->add($tree->root, 'B');
$tree->add($tree->root, 'G');
$tree->add($tree->root, 'A');
$tree->add($tree->root, 'I');
$tree->add($tree->root, 'D');
$tree->add($tree->root, 'H');
$tree->add($tree->root, 'C');
$tree->add($tree->root, 'E');

echo PHP_EOL . "preorder: \t";
$tree->preOrder($tree->root);

echo PHP_EOL . "inorder: \t";
$tree->inOrder($tree->root);

echo PHP_EOL . "postorder: \t";
$tree->postOrder($tree->root);

echo PHP_EOL;