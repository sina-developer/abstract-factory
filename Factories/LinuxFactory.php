<?php

namespace Factories;

use \GUIFactory;
use Buttons\LinuxButton;

class LinuxFactory extends GUIFactory{
    public function create_button(){
        return new LinuxButton();
    }
}