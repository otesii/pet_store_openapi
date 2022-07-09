<?php

/**
 * cafe store api
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * this is a sample.
 * The version of the OpenAPI document: 1.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\AddOrderRequest;

/**
 * AddOrderRequestTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\AddOrderRequest
 */
class AddOrderRequestTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "AddOrderRequest"
     */
    public function testAddOrderRequest()
    {
        $testAddOrderRequest = new AddOrderRequest();
        $namespacedClassname = AddOrderRequest::getModelsNamespace() . '\\AddOrderRequest';
        $this->assertSame('\\' . AddOrderRequest::class, $namespacedClassname);
        $this->assertTrue(
            class_exists($namespacedClassname),
            sprintf('Assertion failed that "%s" class exists', $namespacedClassname)
        );
        $this->markTestIncomplete(
            'Test of "AddOrderRequest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "menuId"
     */
    public function testPropertyMenuId()
    {
        $this->markTestIncomplete(
            'Test of "menuId" property in "AddOrderRequest" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "quantity"
     */
    public function testPropertyQuantity()
    {
        $this->markTestIncomplete(
            'Test of "quantity" property in "AddOrderRequest" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaArr = AddOrderRequest::getOpenApiSchema();
        $this->assertIsArray($schemaArr);
    }
}
