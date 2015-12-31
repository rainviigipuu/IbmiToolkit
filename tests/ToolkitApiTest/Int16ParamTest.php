<?php
namespace ToolkitApiTest;

use ToolkitApi\Int16Param;
use ToolkitApi\ProgramParameter;

/**
 * Class Int16ParamTest
 * @package ToolkitApiTest
 */
class Int16ParamTest extends \PHPUnit_Framework_TestCase
{
    public function testCanCreateInstance()
    {
        $parameter = new Int16Param('both', 'test comment', 'testVar', 8);
        $this->assertTrue($parameter instanceof ProgramParameter);

        $parameter = new Int16Param('in', 'comment 2', 'var2', 10);
        $this->assertTrue($parameter instanceof ProgramParameter);

        $parameter = new Int16Param('out', 'comment3', 'var3', 3);
        $this->assertTrue($parameter instanceof ProgramParameter);
    }
}