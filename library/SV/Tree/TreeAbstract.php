<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Abstract
 *
 * @author Sergey
 */
abstract class SV_Tree_TreeAbstract implements SV_Tree_TreeInterface {
    private $id;
    private $left;
    private $right;
    private $level;
    private $parent;
    private $childs = array();
    
    public function getId() 
    {
        return $this->id;
    }
    
    public function setId($id) 
    {
        if (!is_int($id)) {
            new SV_Tree_TreeException ('Идентификатор элемента/узла коллекции не является целым числом');
        }
        $this->id = $id;
        
        return $this;
    }
    
    public function getLeft() 
    {
        return $this->left;
    }
    
    public function setLeft($left) 
    {
        if (!is_int($left)) {
            new SV_Tree_TreeException ('Идентификатор левой границы не является целым числом!');
        }
        $this->left = $left;
        
        return $this;
    }
    
    public function getRight() 
    {
        return $this->right;
    }
    
    public function setRight($rigth) 
    {
        if (!is_int($rigth)) {
            new SV_Tree_TreeException ('Идентификатор правой границы не является целым числом!');
        }
        $this->right = $rigth;
        
        return $this;
    }
    
    public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        if (!is_int($level) || ($level < 0)) {
            new SV_Tree_TreeException ('Уровень вложенности не является целым положительным числом!');
        }
        $this->level = $level;
        
        return $this;
    }

    public function getParent() 
    {
        return $this->parent;;
    }
    
    public function setParent(SV_Tree_NodeAbstract $parent) 
    {
        $this->parent = $parent;
        return $this;
    }

    ///////////////////////////////////////////////////////////////////////
    public abstract function getChild();
    
    public abstract function getChilds();
    
    public abstract function add(SV_Tree_TreeInterface $treeItem);
    
    public abstract function move(
            SV_Tree_TreeInterface $targetItem,
            SV_Tree_TreeInterface $destinationItem,
            $position); // проверять позицию на положительное целое число
    
    public abstract function remove(SV_Tree_TreeInterface $treeItem);
    
    public abstract function getSize();
    
    public abstract function toArray();
    
    
}