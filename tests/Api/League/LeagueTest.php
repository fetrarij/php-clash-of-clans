<?php

use PHPUnit\Framework\TestCase;
use ClashOfClans\Api\League\League;

class LeagueTest extends TestCase
{
    /** @var League */
    protected $league;

    public function setUp()
    {
        $this->league = League::makeFromArray([
            'name' => 'Bronze League III',
            'iconUrls' => [
                'small' => 'small',
                'tiny' => 'tiny',
                'medium' => 'medium'
            ]
        ]);
    }

    public function testCastsPropertiesProperly()
    {
        $this->assertInstanceOf(\ClashOfClans\Api\League\Icon::class, $this->league->icon());
    }
}
