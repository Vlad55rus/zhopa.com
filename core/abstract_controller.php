<?php
abstract class abstract_controller{
    public $model;
    public $view;
    abstract function index();
}