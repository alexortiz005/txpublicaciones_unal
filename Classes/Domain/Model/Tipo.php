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
 * Tipo
 */
class Tipo extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nombre
     *
     * @var string
     */
    protected $nombre = '';

    /**
     * nombreDisplay
     *
     * @var string
     */
    protected $nombreDisplay = '';

    /**
     * publicaciones
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\PublicacionesUnal\Domain\Model\Publicacion>
     */
    protected $publicaciones = null;

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
        $this->publicaciones = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the nombreDisplay
     *
     * @return string $nombreDisplay
     */
    public function getNombreDisplay()
    {
        return $this->nombreDisplay;
    }

    /**
     * Sets the nombreDisplay
     *
     * @param string $nombreDisplay
     * @return void
     */
    public function setNombreDisplay($nombreDisplay)
    {
        $this->nombreDisplay = $nombreDisplay;
    }

    /**
     * Adds a Publicacion
     *
     * @param \UNAL\PublicacionesUnal\Domain\Model\Publicacion $publicacione
     * @return void
     */
    public function addPublicacione(\UNAL\PublicacionesUnal\Domain\Model\Publicacion $publicacione)
    {
        $this->publicaciones->attach($publicacione);
    }

    /**
     * Removes a Publicacion
     *
     * @param \UNAL\PublicacionesUnal\Domain\Model\Publicacion $publicacioneToRemove The Publicacion to be removed
     * @return void
     */
    public function removePublicacione(\UNAL\PublicacionesUnal\Domain\Model\Publicacion $publicacioneToRemove)
    {
        $this->publicaciones->detach($publicacioneToRemove);
    }

    /**
     * Returns the publicaciones
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\PublicacionesUnal\Domain\Model\Publicacion> $publicaciones
     */
    public function getPublicaciones()
    {
        return $this->publicaciones;
    }

    /**
     * Sets the publicaciones
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\UNAL\PublicacionesUnal\Domain\Model\Publicacion> $publicaciones
     * @return void
     */
    public function setPublicaciones(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $publicaciones)
    {
        $this->publicaciones = $publicaciones;
    }
}
