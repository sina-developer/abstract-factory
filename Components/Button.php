<?php

namespace Components;

abstract class Button {
    abstract function paint();
    function click(){
        echo " Clicked!";
    }
}