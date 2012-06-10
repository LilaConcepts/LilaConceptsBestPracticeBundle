<?php

namespace LilaConcepts\Bundle\LilaConceptsBestPracticeBundle\Tests\Functional;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\Filesystem\Filesystem;

class DefaultControllerTest extends WebTestCase
{
    public function testHomepage()
    {
	//	$this->markTestSkipped('Needs to be run separately because of some DB locking issues.');
		
        $client = $this->createClient();
        $router = self::$kernel->getContainer()->get('router');
		$router->generate('homepage');

        $crawler = $client->request('GET', $router->generate('homepage'));
        print_r($client->getResponse()->getContent());
        $this->assertTrue($crawler->filter('html:contains("hello")')->count() > 0);
    }

	public function testHomepage2()
	{
		
	}

	protected function setUp()
    {
        $fs = new Filesystem();
        $fs->remove(sys_get_temp_dir().'/LilaConceptsBestPracticeBundle/');
    }

    static protected function createKernel(array $options = array())
    {
        return self::$kernel = new AppKernel(
            isset($options['config']) ? $options['config'] : 'default.yml'
        );
    }

}
