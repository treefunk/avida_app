<?php

class Crud_test extends TestCase
{
  public function testIndexMethods()
  {

    $output = $this->request('GET', ['Crud', 'index_get']);
    $expected = 'Get request!';
    $this->assertResponseCode(200);
    $this->assertContains($expected, $output);

    $output = $this->request('Post', ['Crud', 'index_post']);
    $expected = 'Post request!';
    $this->assertResponseCode(200);
    $this->assertContains($expected, $output);

  }

}
