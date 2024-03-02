<?php

namespace Tests\Feature;



use Ashaduzzamanfaruque\Press\MarkdownParser;
use Tests\TestCase;

class initialTest extends TestCase
{
    /** @test */  //if u not give this the test will not working. ./vendor/bin/phpunit --filter experiment use it for singe function test and ./vendor/bin/phpunit for test
    public function simple_markdown_is_parsed(){
        $this->assertEquals('<h1>Nahid</h1>',MarkdownParser::parse('#Nahid'));
    }
}