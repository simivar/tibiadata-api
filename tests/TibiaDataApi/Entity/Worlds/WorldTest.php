<?php

namespace TibiaDataApi\Tests\Entity\Worlds;

use PHPUnit\Framework\TestCase;
use TibiaDataApi\Entity\Worlds\World;

class WorldTest extends TestCase
{

    public function testWhenIsLocked()
    {
        $world = new World('testWhenIsLocked', 0, '', '', 'locked');
        $this->assertEquals(true, $world->isLocked());
        $this->assertEquals(false, $world->isBlocked());
        $this->assertEquals(false, $world->isExperimental());
        $this->assertEquals(false, $world->isPremium());
    }

    public function testWhenIsBlocked()
    {
        $world = new World('testWhenIsBlocked', 0, '', '', 'blocked');
        $this->assertEquals(false, $world->isLocked());
        $this->assertEquals(true, $world->isBlocked());
        $this->assertEquals(false, $world->isExperimental());
        $this->assertEquals(false, $world->isPremium());
    }

    public function testWhenIsExperimental()
    {
        $world = new World('testWhenIsExperimental', 0, '', '', 'experimental game world');
        $this->assertEquals(false, $world->isLocked());
        $this->assertEquals(false, $world->isBlocked());
        $this->assertEquals(true, $world->isExperimental());
        $this->assertEquals(false, $world->isPremium());
    }

    public function testWhenIsPremium()
    {
        $world = new World('testWhenIsBlocked', 0, '', '', 'premium');
        $this->assertEquals(false, $world->isLocked());
        $this->assertEquals(false, $world->isBlocked());
        $this->assertEquals(false, $world->isExperimental());
        $this->assertEquals(true, $world->isPremium());
    }

}