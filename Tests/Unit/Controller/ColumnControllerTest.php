<?php
namespace FREESIXTYFIVE\FsfZollerColumn\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author David Geib <d.geib@freesixtyfive.de>
 */
class ColumnControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \FREESIXTYFIVE\FsfZollerColumn\Controller\ColumnController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerColumn\Controller\ColumnController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllColumnsFromRepositoryAndAssignsThemToView()
    {

        $allColumns = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $columnRepository = $this->getMockBuilder(\FREESIXTYFIVE\FsfZollerColumn\Domain\Repository\ColumnRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $columnRepository->expects(self::once())->method('findAll')->will(self::returnValue($allColumns));
        $this->inject($this->subject, 'columnRepository', $columnRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('columns', $allColumns);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
