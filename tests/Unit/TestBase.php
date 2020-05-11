<?php

declare(strict_types=1);

namespace App\Tests\Unit;

use App\Repository\GroupRepository;
use App\Repository\UserRepository;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class TestBase extends TestCase
{
    /** @var UserRepository|MockObject */
    protected $userRepository;

    /** @var GroupRepository|MockObject */
    protected $groupRepository;

    public function setUp(): void
    {
        $this->userRepository = $this->getMockBuilder(UserRepository::class)->disableOriginalConstructor()->getMock();
        $this->groupRepository = $this->getMockBuilder(GroupRepository::class)->disableOriginalConstructor()->getMock();
    }
}
