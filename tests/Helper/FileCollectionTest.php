<?php
/**
 * Created by PhpStorm.
 * User: xuansw
 * Date: 2017/10/19
 * Time: 18:44
 */

use Camunda\Helper\FileCollection;

class FileCollectionTest extends PHPUnit\Framework\TestCase
{
    public function testAddFile()
    {
        $target = [
            [
                'name' => 'a',
                'contents' => 'a',
                'filename' => 'a.txt'
            ],
            [
                'name' => 'b',
                'contents' => 'b',
                'filename' => 'b.txt'
            ]
        ];
        $fc = new FileCollection();
        $fc->addFile('a', 'a', 'a.txt')
            ->addFile('b', 'b', 'b.txt');

        static::assertEquals($target, $fc->getFiles());
    }
}
