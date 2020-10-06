<?php 
require("./autoload.php");

use Factories\LinuxFactory;
use Factories\WindowsFactory;
use Factories\MacFactory;
use Factories\MozillaFactory;



$os = "mac";

switch ($os) {
    case 'linux':
        $factory = new LinuxFactory();
    break;
    case 'mac':
        $factory = new MacFactory();
        break;
    case 'mozilla':
        $factory = new MozillaFactory();
        break;
    default:
        throw new Exception("Os Not Supported!", 1);
        break;
}

$button = $factory->create_button();

$button->paint();
$button->click();