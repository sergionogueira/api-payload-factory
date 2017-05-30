<?php

use JumiaMarket\ApiPayloadFactory\ApiPayloadFactory;
use JumiaMarket\ApiPayloadFactory\Definition;

class ApiPayloadFactoryTest extends AbstractTestCase
{
    /** @test */
    public function it_should_instantiate_the_factory()
    {
        $this->assertInstanceOf(ApiPayloadFactory::class, new ApiPayloadFactory());
    }

    /** @test */
    public function it_should_create_a_definition()
    {
        $definition = ApiPayloadFactory::define('post/create', 1.1);
        $this->assertInstanceOf(Definition::class, $definition);
    }

    /**
     * @test
     * @expectedException InvalidArgumentException
     */
    public function it_should_not_be_possible_to_define_a_definition_with_a_non_valid_enpoint_format()
    {
        $definition = ApiPayloadFactory::define(false, 1.1);
    }

    /**
     * @test
     * @expectedException \JumiaMarket\ApiPayloadFactory\Exception\DefinitionDuplicatedException
     */
    public function it_should_not_be_possible_to_define_a_definition_twice()
    {
        $definition = ApiPayloadFactory::define('post/create', 1.1);
        $definition = ApiPayloadFactory::define('post/create', 1.1);
    }
}