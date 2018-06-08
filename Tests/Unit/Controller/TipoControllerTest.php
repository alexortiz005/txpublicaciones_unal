<?php
namespace UNAL\PublicacionesUnal\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 */
class TipoControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\PublicacionesUnal\Controller\TipoController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\UNAL\PublicacionesUnal\Controller\TipoController::class)
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
    public function listActionFetchesAllTiposFromRepositoryAndAssignsThemToView()
    {

        $allTipos = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $tipoRepository = $this->getMockBuilder(\UNAL\PublicacionesUnal\Domain\Repository\TipoRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $tipoRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTipos));
        $this->inject($this->subject, 'tipoRepository', $tipoRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('tipos', $allTipos);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
