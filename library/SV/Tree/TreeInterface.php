<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Interface
 *
 * @author Sergey
 */
interface SV_Tree_TreeInterface {
    
    public function add();
    public function remove();
    public function move();
    public function toArray();
    public function getLeft();
    public function setLeft();
    public function getRight();
    public function setRight();
    public function getId();
    public function setId();
    public function getSize();  // высчитывать по массиву - длина массива.
    public function getParent();
    public function setParent();
    public function getChild();
    public function getLevel();
    public function getChilds();
    
}