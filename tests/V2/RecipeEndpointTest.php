<?php

class RecipeEndpointTest extends TestCase {
    public function test() {
        $this->mockResponse( '[1,2,3,4,5,6,7,8,9,10]' );

        $this->assertEquals( [1,2,3,4,5,6,7,8,9,10], $this->api()->recipes()->ids() );
    }

    public function testSearchInput() {
        $this->mockResponse( '[7259,7260,7261,7262,7263,7264,7265,7266,7267,7268,7269,7270,7271,7272,7273,7274,7275,7276,7277,7322]' );

        $this->assertContains( 7267, $this->api()->recipes()->search()->input(43775) );
    }

    public function testSearchOutput() {
        $this->mockResponse( '[7237]' );

        $this->assertEquals( [7237], $this->api()->recipes()->search()->output(43775) );
    }
}