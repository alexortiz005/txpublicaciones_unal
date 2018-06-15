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
     * isGlobal
     *
     * @var bool
     */
    protected $isGlobal = false;

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
     * Returns the isGlobal
     *
     * @return bool $isGlobal
     */
    public function getIsGlobal()
    {
        return $this->isGlobal;
    }

    /**
     * Sets the isGlobal
     *
     * @param bool $isGlobal
     * @return void
     */
    public function setIsGlobal($isGlobal)
    {
        $this->isGlobal = $isGlobal;
    }

    /**
     * Returns the boolean state of isGlobal
     *
     * @return bool
     */
    public function isIsGlobal()
    {
        return $this->isGlobal;
    }
}
