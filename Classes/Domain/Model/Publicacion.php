<?php
namespace UNAL\PublicacionesUnal\Domain\Model;

/***
 *
 * This file is part of the "Publicaciones UNAL" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Alexis Ortiz <eaortiz@unal.edu.co>, UNAL
 *
 ***/

/**
 * Publicacion
 */
class Publicacion extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     *
     * @var string
     */
    protected $nombre = '';

    /**
     * titulo
     *
     * @var string
     */
    protected $titulo = '';

    /**
     * subtitulo
     *
     * @var string
     */
    protected $subtitulo = '';

    /**
     * autor
     *
     * @var string
     */
    protected $autor = '';

    /**
     * fecha
     *
     * @var \DateTime
     */
    protected $fecha = null;

    /**
     * lugar
     *
     * @var string
     */
    protected $lugar = '';

    /**
     * thumbnail
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $thumbnail = null;

    /**
     * descripcion
     *
     * @var string
     */
    protected $descripcion = '';

    /**
     * urlArchivo
     *
     * @var string
     */
    protected $urlArchivo = '';

    /**
     * archivo
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $archivo = null;

    /**
     * tipos
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\PublicacionesUnal\Domain\Model\Tipo>
     */
    protected $tipos = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tipos = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the nombre
     *
     * @return string $nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Sets the nombre
     *
     * @param string $nombre
     * @return void
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Returns the titulo
     *
     * @return string $titulo
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Sets the titulo
     *
     * @param string $titulo
     * @return void
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * Returns the subtitulo
     *
     * @return string $subtitulo
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Sets the subtitulo
     *
     * @param string $subtitulo
     * @return void
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;
    }

    /**
     * Returns the autor
     *
     * @return string $autor
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Sets the autor
     *
     * @param string $autor
     * @return void
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    /**
     * Returns the fecha
     *
     * @return \DateTime $fecha
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Sets the fecha
     *
     * @param \DateTime $fecha
     * @return void
     */
    public function setFecha(\DateTime $fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * Returns the lugar
     *
     * @return string $lugar
     */
    public function getLugar()
    {
        return $this->lugar;
    }

    /**
     * Sets the lugar
     *
     * @param string $lugar
     * @return void
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }

    /**
     * Returns the thumbnail
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Sets the thumbnail
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail
     * @return void
     */
    public function setThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * Returns the descripcion
     *
     * @return string $descripcion
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Sets the descripcion
     *
     * @param string $descripcion
     * @return void
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * Returns the urlArchivo
     *
     * @return string $urlArchivo
     */
    public function getUrlArchivo()
    {
        return $this->urlArchivo;
    }

    /**
     * Sets the urlArchivo
     *
     * @param string $urlArchivo
     * @return void
     */
    public function setUrlArchivo($urlArchivo)
    {
        $this->urlArchivo = $urlArchivo;
    }

    /**
     * Returns the archivo
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $archivo
     */
    public function getArchivo()
    {
        return $this->archivo;
    }

    /**
     * Sets the archivo
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $archivo
     * @return void
     */
    public function setArchivo(\TYPO3\CMS\Extbase\Domain\Model\FileReference $archivo)
    {
        $this->archivo = $archivo;
    }

    /**
     * Adds a Tipo
     *
     * @param \UNAL\PublicacionesUnal\Domain\Model\Tipo $tipo
     * @return void
     */
    public function addTipo(\UNAL\PublicacionesUnal\Domain\Model\Tipo $tipo)
    {
        $this->tipos->attach($tipos);
    }

    /**
     * Removes a Tipo
     *
     * @param \UNAL\PublicacionesUnal\Domain\Model\Tipo $tipoToRemove The Tipo to be removed
     * @return void
     */
    public function removeTipo(\UNAL\PublicacionesUnal\Domain\Model\Tipo $tipoToRemove)
    {
        $this->tipos->detach($tipoToRemove);
    }

    /**
     * Returns the tipos
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\PublicacionesUnal\Domain\Model\Tipo> tipos
     */
    public function getTipos()
    {
        return $this->tipos;
    }

    /**
     * Sets the tipos
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\PublicacionesUnal\Domain\Model\Tipo> $tipos
     * @return void
     */
    public function setTipos(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tipos)
    {
        $this->tipos = $tipos;
    }
}
