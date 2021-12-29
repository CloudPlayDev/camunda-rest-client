<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 18:50
 */

namespace Camunda\Entity\Request;


class DeploymentRequestTest extends \PHPUnit\Framework\TestCase
{
    public function testSet()
    {
        $target = [
            'id' => 'drId'
        ];

        $dr = new DeploymentRequest();
        $dr->set('id', 'drId')->set('bbb', 'bbb');
        static::assertEquals($dr->getObject(), $target);
    }
}
