<?php

namespace Recca0120\Repository\Tests;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Recca0120\Repository\Criteria;

class CriteriaTest extends TestCase
{
    protected function tearDown()
    {
        parent::tearDown();
        m::close();
    }

    public function testInstance()
    {
        $this->assertInstanceOf('Recca0120\Repository\Criteria', new Criteria);
    }

    public function testCreate()
    {
        $criteria = Criteria::create();
        $this->assertInstanceOf('Recca0120\Repository\Criteria', $criteria);
    }

    public function testExpr()
    {
        $expression = Criteria::expr('foo = bar');
        $this->assertInstanceOf('Recca0120\Repository\Expression', $expression);
        $this->assertSame((string) $expression, 'foo = bar');
    }
}
