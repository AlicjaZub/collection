<?php

require '../functions.php';

use PHPUnit\Framework\TestCase;

class functions extends TestCase
{
    public function testDetails_success()
    {
        $input = [
            'plant1'=>[
                'name'=> 'Prayer Plant',
                'latin_name'=> 'Maranta leuconeura',
                'hardiness_type' => 'Tender',
                'image'=> 'prayer.jpg'],
            'plant2'=> [
                'name'=> 'Prayer Plant',
                'latin_name'=> 'Maranta leuconeura',
                'hardiness_type' => 'Tender',
                'image'=> 'prayer.jpg'
            ]];
        $expected = '<div class="items"><h1>Prayer Plant</h1><img src="images/prayer.jpg" ' .
            'alt="Prayer Plant"><p><b> Latin name: </b>Maranta leuconeura</p><p><b> ' .
            'Hardiness: </b>Tender</p></div><div class="items"><h1>Prayer Plant</h1><img ' .
            'src="images/prayer.jpg" alt="Prayer Plant"><p><b> Latin name: </b>Maranta leuconeura</p><p><b> ' .
            'Hardiness: </b>Tender</p></div>';
        $result = details($input);
        $this->assertIsString($result);
        $this->assertNotNull($result);
        $this->assertEquals($expected, $result);
    }
    public function testDetails_given_not_nested_array_failure()
    {
        $input = [
            'name'=> 'Prayer Plant',
            'latin_name'=> 'Maranta leuconeura',
            'hardiness_type' => 'Tender',
            'image'=> 'prayer.jpg',
            'plant1'=> [
                'name'=> 'Prayer Plant',
                'latin_name'=> 'Maranta leuconeura',
                'hardiness_type' => 'Tender',
                'image'=> 'prayer.jpg']];
        $expected = 'Invalid information!';
        $result = details($input);
        $this->assertIsString($result);
        $this->assertEquals($expected, $result);
    }
    public function testDetails_given_empty_array_success()
    {
        $input = [];
        $result = details($input);
        $this->assertIsString($result);
        $this->assertEmpty($result);
    }
    public function testDetails_malformed_int()
    {
        $input = 3;
        $this->expectException(TypeError::class);
        details($input);
    }
    public function testDetails_malformed_string()
    {
        $input = 'string';
        $this->expectException(TypeError::class);
        details($input);
    }
    public function testDetails_malformed_float()
    {
        $input = 3.333;
        $this->expectException(TypeError::class);
        details($input);
    }
    public function testDetails_malformed_bool()
    {
        $input = true;
        $this->expectException(TypeError::class);
        details($input);
    }
}