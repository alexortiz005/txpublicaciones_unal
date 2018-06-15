<?php
namespace UNAL\PublicacionesUnal\Controller;

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
 * TipoController
 */
class TipoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * tipoRepository
     *
     * @var \UNAL\PublicacionesUnal\Domain\Repository\TipoRepository
     * @inject
     */
    protected $tipoRepository = null;

    /**
     * publicacionRepository
     *
     * @var \UNAL\PublicacionesUnal\Domain\Repository\PublicacionRepository
     * @inject
     */
    protected $publicacionRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $tipos = $this->tipoRepository->findAll();
        $publicaciones = $this->publicacionRepository->findAll();
        $this->view->assignMultiple(['tipos' => $tipos, 'publicaciones' => $publicaciones]);
    }
}
