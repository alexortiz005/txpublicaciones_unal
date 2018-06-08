<?php
namespace UNAL\PublicacionesUnal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 */
class TipoTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\PublicacionesUnal\Domain\Model\Tipo
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\PublicacionesUnal\Domain\Model\Tipo();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNombreReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombre()
        );
    }

    /**
     * @test
     */
    public function setNombreForStringSetsNombre()
    {
        $this->subject->setNombre('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombre',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getNombreDisplayReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNombreDisplay()
        );
    }

    /**
     * @test
     */
    public function setNombreDisplayForStringSetsNombreDisplay()
    {
        $this->subject->setNombreDisplay('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nombreDisplay',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPublicacionesReturnsInitialValueForPublicacion()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getPublicaciones()
        );
    }

    /**
     * @test
     */
    public function setPublicacionesForObjectStorageContainingPublicacionSetsPublicaciones()
    {
        $publicacione = new \UNAL\PublicacionesUnal\Domain\Model\Publicacion();
        $objectStorageHoldingExactlyOnePublicaciones = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOnePublicaciones->attach($publicacione);
        $this->subject->setPublicaciones($objectStorageHoldingExactlyOnePublicaciones);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOnePublicaciones,
            'publicaciones',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addPublicacioneToObjectStorageHoldingPublicaciones()
    {
        $publicacione = new \UNAL\PublicacionesUnal\Domain\Model\Publicacion();
        $publicacionesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $publicacionesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($publicacione));
        $this->inject($this->subject, 'publicaciones', $publicacionesObjectStorageMock);

        $this->subject->addPublicacione($publicacione);
    }

    /**
     * @test
     */
    public function removePublicacioneFromObjectStorageHoldingPublicaciones()
    {
        $publicacione = new \UNAL\PublicacionesUnal\Domain\Model\Publicacion();
        $publicacionesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $publicacionesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($publicacione));
        $this->inject($this->subject, 'publicaciones', $publicacionesObjectStorageMock);

        $this->subject->removePublicacione($publicacione);
    }
}
