<?php

namespace LCS\AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'default/index');

        $this->assertTrue($crawler->filter('html:contains("Siniestro")')->count() > 0);
    }
}
