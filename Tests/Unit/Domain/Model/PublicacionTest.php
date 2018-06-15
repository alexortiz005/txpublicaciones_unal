<?php
namespace UNAL\PublicacionesUnal\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexis Ortiz <eaortiz@unal.edu.co>
 */
class PublicacionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \UNAL\PublicacionesUnal\Domain\Model\Publicacion
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \UNAL\PublicacionesUnal\Domain\Model\Publicacion();
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
    public function getTituloReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitulo()
        );
    }

    /**
     * @test
     */
    public function setTituloForStringSetsTitulo()
    {
        $this->subject->setTitulo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'titulo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSubtituloReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSubtitulo()
        );
    }

    /**
     * @test
     */
    public function setSubtituloForStringSetsSubtitulo()
    {
        $this->subject->setSubtitulo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'subtitulo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAutorReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAutor()
        );
    }

    /**
     * @test
     */
    public function setAutorForStringSetsAutor()
    {
        $this->subject->setAutor('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'autor',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFechaReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getFecha()
        );
    }

    /**
     * @test
     */
    public function setFechaForDateTimeSetsFecha()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setFecha($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'fecha',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLugarReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLugar()
        );
    }

    /**
     * @test
     */
    public function setLugarForStringSetsLugar()
    {
        $this->subject->setLugar('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lugar',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getThumbnailReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getThumbnail()
        );
    }

    /**
     * @test
     */
    public function setThumbnailForFileReferenceSetsThumbnail()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setThumbnail($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'thumbnail',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescripcionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescripcion()
        );
    }

    /**
     * @test
     */
    public function setDescripcionForStringSetsDescripcion()
    {
        $this->subject->setDescripcion('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'descripcion',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUrlArchivoReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUrlArchivo()
        );
    }

    /**
     * @test
     */
    public function setUrlArchivoForStringSetsUrlArchivo()
    {
        $this->subject->setUrlArchivo('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'urlArchivo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArchivoReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getArchivo()
        );
    }

    /**
     * @test
     */
    public function setArchivoForFileReferenceSetsArchivo()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setArchivo($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'archivo',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTiposReturnsInitialValueForTipo()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTipos()
        );
    }

    /**
     * @test
     */
    public function setTiposForObjectStorageContainingTipoSetsTipos()
    {
        $tipo = new \UNAL\PublicacionesUnal\Domain\Model\Tipo();
        $objectStorageHoldingExactlyOneTipos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTipos->attach($tipo);
        $this->subject->setTipos($objectStorageHoldingExactlyOneTipos);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTipos,
            'tipos',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTipoToObjectStorageHoldingTipos()
    {
        $tipo = new \UNAL\PublicacionesUnal\Domain\Model\Tipo();
        $tiposObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tiposObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tipo));
        $this->inject($this->subject, 'tipos', $tiposObjectStorageMock);

        $this->subject->addTipo($tipo);
    }

    /**
     * @test
     */
    public function removeTipoFromObjectStorageHoldingTipos()
    {
        $tipo = new \UNAL\PublicacionesUnal\Domain\Model\Tipo();
        $tiposObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tiposObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tipo));
        $this->inject($this->subject, 'tipos', $tiposObjectStorageMock);

        $this->subject->removeTipo($tipo);
    }
}
