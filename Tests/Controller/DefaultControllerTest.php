<?php

namespace Lila\Bundle\BestPracticeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        
        $crawler = $client->request('GET', '/hello/Fabien');
        
        $this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }

    static protected function createKernel(array $options = array())
    {
        return self::$kernel = new AppKernel(
            isset($options['config']) ? $options['config'] : 'default.yml'
        );
    }

}
