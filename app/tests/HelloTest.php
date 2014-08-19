<?php

/**
 * Description of HelloTest
 *
 * @author jahangiralamdiu
 */
class HelloTest extends TestCase {
    
    public function testHelloExists()
    {
        $this->call('GET', '/');
        $this->assertResponseOk();
    }
    
    public function testHelloControllerExists ()
    {
        $this->action('GET', 'HelloController@sayhello');
        $this->assertResponseOk();
        
    }
    
    public function testControlofSayHello()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals('Hello Jahangir', $response->getContent());
    }
}
