<?php

abstract class abstract_view {
    public $view;
    abstract function generate($template_view, $data = null);
}