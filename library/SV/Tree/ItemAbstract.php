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
abstract class SV_Tree_Item_Abstract extends SV_Tree_TreeAbstract
{
    // в наследниках реализовать метод toArray
    
    public function add()
    {
        new SV_Tree_TreeException('Лист не может быть узлом (веткой)');
    }
    
    public function remove() 
    {
        new SV_Tree_TreeException('Лист не может быть узлом (веткой)');
    }
    
    public function move() 
    {
        new SV_Tree_TreeException('Лист не может быть узлом (веткой)');
    }
    
    public function getSize()
    {
        return 1;
    }
    
    public function getChild()
    {
        new SV_Tree_TreeException('Лист не может быть узлом (веткой)');
    }
    
    public function getChilds()
    {
        new SV_Tree_TreeException('Лист не может быть узлом (веткой)');
    }

    
}