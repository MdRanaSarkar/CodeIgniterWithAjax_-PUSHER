<?php

use \PHPUnit\Framework\TestCase;


class CollectionTest extends TestCase{

    /** @test */
    public function employeenotentrytest(){
        $collection=new \App\Support\Collection;
        $this->assertEmpty($collection->get());
    }

    /**@test */

    public function testcountindata(){
        $collection =new \App\Support\Collection([
            'one','two','three'
        ]);

        $this->assertEquals(3,$collection->count());
    }
    /**@test */

    public function itemreturnedmatched(){
        $collection =new \App\Support\Collection([
            'one','two'
        ]);
        $this->assertCount(2,$collection->count());
        $this->assertEquals($collection->get()[0],'one');
        $this->assertEquals($collection->get()[1],'two');
        


    }
    public function testinstanceofthedta(){
        $collection=new \App\Support\Collection();
        $this->assertInstanceOf(IteratorAggregate::class,$collection);
    }

}

