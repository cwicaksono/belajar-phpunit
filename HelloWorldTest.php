<?php

include 'Group.php';

class HelloWorldTest extends \PHPUnit_Framework_TestCase {

    public function testValidHariNormalMakanPagi(){
        $group = new Group();
        $this->assertEquals('Makan Pagi', $group->get_group('2022/12/29 06:00:00'));
        $this->assertEquals('Makan Pagi', $group->get_group('2022/12/29 07:00:00'));
        $this->assertEquals('Makan Pagi', $group->get_group('2022/12/29 07:30:00'));
    }

    public function testValidHariNormalMakanSiang(){
        $group = new Group();
        $this->assertEquals('Makan Siang', $group->get_group('2022/12/29 12:00:00'));
        $this->assertEquals('Makan Siang', $group->get_group('2022/12/29 12:30:00'));
        $this->assertEquals('Makan Siang', $group->get_group('2022/12/29 13:00:00'));
    }

    public function testValidHariNormalMakanMalam(){
        $group = new Group();
        $this->assertEquals('Makan Malam', $group->get_group('2022/12/29 18:00:00'));
        $this->assertEquals('Makan Malam', $group->get_group('2022/12/29 18:30:00'));
        $this->assertEquals('Makan Malam', $group->get_group('2022/12/29 20:00:00'));
    }

    public function testHariJumatMakanSiang(){
        $group = new Group();
        $this->assertEquals('Makan Siang', $group->get_group('2022/12/30 11:30:00'));
        $this->assertEquals('Makan Siang', $group->get_group('2022/12/30 12:00:00'));
        $this->assertEquals('Makan Siang', $group->get_group('2022/12/30 13:30:00'));
    }
}

?>
