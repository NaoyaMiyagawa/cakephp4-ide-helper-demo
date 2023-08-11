<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\HogeHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\HogeHelper Test Case
 */
class HogeHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\HogeHelper
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
        $view = new View();
        $this->Hoge = new HogeHelper($view);
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
