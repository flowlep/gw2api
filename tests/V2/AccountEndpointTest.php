<?php

class AccountEndpointTest extends TestCase {
    public function test() {
        $this->mockResponse('{
            "id":"account-guid",
            "name"   : "Lawton.1234",
            "world"  : 1007,
            "guilds" : [
                "DA9137CD-3A86-E411-B57A-00224D566B58",
                "1F5F70AA-1DB6-E411-A2C4-00224D566B58",
                "8B211747-3B86-E411-B57A-00224D566B58"
            ]
        }');

        $account = $this->api()->account('api_key')->info();
        $this->assertEquals( 'Lawton.1234', $account->name );
    }
}
