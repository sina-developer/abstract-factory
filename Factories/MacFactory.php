<?php

namespace Factories;

use \GUIFactory;
use Buttons\MacButton;

class MacFactory extends GUIFactory{
    public function create_button(){
        return new MacButton();
    }
}