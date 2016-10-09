<?php


class RouteTest extends TestCase {

    /*! const token for test account */
    const TOKEN = 'FLtW5wL8cdvUgec0Nciu2mhjYPyBXYjbNvloAdIJnKqgpmaHqkdF0Yzsd1tMyAA2OSbhhOXPfgDwVbCEniOnI69ugEM8QNIBXWFT';

    /**
     * Testes to see if you can load index.
     */
    public function testCanGetRoot()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(302, $response->getStatusCode()); 
    }

    /**
     * Tests to see if you can load about page.
     */
    public function testCanGetAbout()
    {
        $response = $this->call('GET', '/about');
        $this->assertEquals(200, $response->getStatusCode()); 
    }

    /**
     * Tests to see if you can load get page.
     */
    public function testCanGetGet()
    {
        $response = $this->call('GET', '/get');
        $this->assertEquals(200, $response->getStatusCode()); 
    }
   
    /**
     * Tests to see if you can load mission page.
     */
    public function testCanGetMission()
    {
        $response = $this->call('GET', '/mission');
        $this->assertEquals(200, $response->getStatusCode()); 
    }

    /**
     * Tests to see if login api is working.
     */
    public function testCanPostLogin()
    {
        $response = $this->call('POST', '/api/login',
            ['email'=>'d@d.com', 'password' => '1234']);
        $this->assertEquals(200, $response->getStatusCode()); 
    }

    /**
     * Tests to see if trip api works.
     */
    public function testCanPostMile()
    {
        $response = $this->call('POST', '/api/mile',
            ['token' => self::TOKEN]);
        $this->assertEquals(200, $response->getStatusCode()); 
    }

    /**
     * Tests to see if you can get trips by type.
     */
    public function testCanPostMileType()
    {
        $response = $this->call('POST', '/api/mile/OTHER',
            ['token' => self::TOKEN]);
        $this->assertEquals(200, $response->getStatusCode()); 
    }

    /**
     * Tests to see if you can create new trip.
     */
    public function testCanPostMileNew()
    {
        $response = $this->call('POST', '/api/mile/OTHER/APPLE/new',
            ['token' => self::TOKEN]);
        $this->assertEquals(200, $response->getStatusCode()); 
    }

    /**
     * Teste to see if you can add millage to current trip.
     */
    public function testCanPostMileAdd()
    {
        $response = $this->call('POST', '/api/mile/9.5/add',
            ['token' => self::TOKEN]);
        $this->assertEquals(200, $response->getStatusCode()); 
    }
}
