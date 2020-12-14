<?php
namespace FREESIXTYFIVE\FsfZollerColumn\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class ColumnTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerColumn\Domain\Model\Column
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \FREESIXTYFIVE\FsfZollerColumn\Domain\Model\Column();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
