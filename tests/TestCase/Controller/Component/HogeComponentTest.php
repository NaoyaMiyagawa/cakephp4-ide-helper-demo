<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\HogeComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\HogeComponent Test Case
 */
class HogeComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\HogeComponent
     */
    protected $Hoge;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Hoge = new HogeComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Hoge);

        parent::tearDown();
    }
}
