<?php
/** Created by PhpStorm */
//use PHPUnit\Framework\TestCase;
class Welcome_test extends TestCase
{
	public function setUp():void
	{
		$this->resetInstance();
		$this->CI->load->model('Inventory_model');
		$this->obj = $this->CI->Inventory_model;
	}

	public function test_get_category_list()
	{
		$expected = [
			1 => 'Book',
			2 => 'CD',
			3 => 'DVD',
		];

		$list = $this->obj->get_category_list();

		foreach ($list as $category) {
			$this->assertEquals($expected[$category->id], $category->name);
		}
	}
	
	

}

