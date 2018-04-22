<?php

use PHPUnit\Framework\TestCase;
use ClashOfClans\Api\Clan\MemberList;
use ClashOfClans\Api\Clan\Player;

class MemberListTest extends TestCase
{
    /** @var MemberList */
    protected $memberList;

    public function setUp()
    {
        $this->memberList = MemberList::makeFromArray([
            ['name' => 'VanSilent'],
            ['name' => 'Reek'],
        ]);
    }

    public function testItProperlyCastsAllMembers()
    {
        $player = $this->memberList->first();

        $this->assertInstanceOf(Player::class, $player);
        $this->assertEquals('VanSilent', $player->name());
    }

    public function testReturnsNthMember()
    {
        $player = $this->memberList->nth(1);

        $this->assertEquals('Reek', $player->name());
    }
}
