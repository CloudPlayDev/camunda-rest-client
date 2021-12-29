<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 18:15
 */

use Camunda\Service\BasicService;
use Camunda\Entity\Request\BasicRequest;

class BasicServiceTest extends PHPUnit\Framework\TestCase
{
    public function testSet()
    {
        $basicRequest = new BasicRequest();

        $basic = new BasicService();
        $basic->setRequestUrl('/deployment');
        $basic->setRequestContentType('json');
        $basic->setRequestMethod('get');
        $basic->setRequestObject($basicRequest);

        static::assertEquals('/deployment', $basic->getRequestUrl());
        static::assertEquals('json', $basic->getRequestContentType());
        static::assertEquals('GET', $basic->getRequestMethod());
        static::assertEquals($basicRequest, $basic->getRequestObject());
    }
}
