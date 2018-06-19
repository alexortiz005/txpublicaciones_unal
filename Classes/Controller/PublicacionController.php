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
 * PublicacionController
 */
class PublicacionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * publicacionRepository
     *
     * @var \UNAL\PublicacionesUnal\Domain\Repository\PublicacionRepository
     * @inject
     */
    protected $publicacionRepository = null;

    /**
     * action preview
     *
     * @return void
     */
    public function previewAction()
    {

        $uri_background = 'fileadmin/user_upload/' . $this->settings['background'];
        $uri_link = $this->settings['link'];
        $titulo = $this->settings['titulo'];
        $subtitulo = $this->settings['subtitulo'];
        $uids_publicaciones_a_mostrar = explode(',', $this->settings['publicaciones_a_mostrar']);

        $publicaciones_a_mostrar = [];
        foreach ($uids_publicaciones_a_mostrar as $uid) {
            $publicaciones_a_mostrar[] = $this->publicacionRepository->findByUid($uid);
        }        


        $this->view->assignMultiple([
            'uri_background' => $uri_background, 
            'uri_link' => $uri_link, 
            'titulo' => $titulo, 
            'subtitulo' => $subtitulo, 
            'publicaciones_a_mostrar' => $publicaciones_a_mostrar
        ]);

        $this->response->addAdditionalHeaderData('<script src="/typo3conf/ext/publicaciones_unal/Resources/Public/Js/preview.js"></script>');

    }

    /**
     * action
     *
     * @return void
     */
    public function Action()
    {

    }
}
