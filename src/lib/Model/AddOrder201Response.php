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
 */
namespace OpenAPIServer\Model;

use OpenAPIServer\BaseModel;

/**
 * AddOrder201Response
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */
class AddOrder201Response extends BaseModel
{
    /**
     * @var string Models namespace.
     * Can be required for data deserialization when model contains referenced schemas.
     */
    protected const MODELS_NAMESPACE = '\OpenAPIServer\Model';

    /**
     * @var string Constant with OAS schema of current class.
     * Should be overwritten by inherited class.
     */
    protected const MODEL_SCHEMA = <<<'SCHEMA'
{
  "type" : "object",
  "properties" : {
    "id" : {
      "type" : "integer"
    },
    "menuId" : {
      "type" : "integer"
    },
    "quantity" : {
      "type" : "integer"
    },
    "shipDate" : {
      "type" : "string",
      "format" : "date-time"
    }
  },
  "x-examples" : {
    "example-1" : {
      "id" : 101,
      "menuId" : 1,
      "quantity" : 2,
      "shipDate" : "2022-07-02T17:04:19.719Z"
    }
  }
}
SCHEMA;
}
