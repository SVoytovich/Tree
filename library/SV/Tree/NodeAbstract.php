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
abstract class SV_Tree_NodeAbstract extends SV_Tree_TreeAbstract {

    public abstract function add(SV_Tree_TreeInterface $treeItem);
    
    public abstract function move(
            SV_Tree_TreeInterface $targetItem,
            SV_Tree_TreeInterface $destinationItem,
            $position); // проверять позицию на положительное целое число
    
    public abstract function remove(SV_Tree_TreeInterface $treeItem);
    
    public abstract function getSize();
    
    public abstract function toArray();
    
    public abstract function getChild();
    
    public abstract function getChilds();
    
    
}