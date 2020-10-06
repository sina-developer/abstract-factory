<?php

namespace Factories;

use \GUIFactory;
use Buttons\MozillaButton;

class MozillaFactory extends GUIFactory{
    function create_button(){
        return new MozillaButton();
    }
}