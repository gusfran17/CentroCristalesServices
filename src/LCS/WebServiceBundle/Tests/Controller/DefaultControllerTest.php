<?php

namespace LCS\WebServiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'v1');

        $this->assertTrue($crawler->filter('html:contains("Index")')->count() > 0);
    }

    public function testObeterBanner()
    {
     	   

        $this->assertTrue(true);
    }
}
