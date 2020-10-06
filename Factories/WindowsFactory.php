<?php

namespace Factories;

use \GUIFactory;
use Buttons\WindowsButton;

class WindowsFactory extends GUIFactory{
    public function create_button(){
        return new WindowsButton();
    }
}