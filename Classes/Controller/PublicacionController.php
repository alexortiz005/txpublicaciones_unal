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

        $uri_background = '../fileadmin/user_upload/' . $this->settings['background'];
        $uri_imagen_link = 'fileadmin/user_upload/' . $this->settings['imagen_link'];
        $uri_link = $this->settings['link'];
        $titulo_link = $this->settings['titulo_link'];
        $texto_link = $this->settings['texto_link'];
        $uids_publicaciones_a_mostrar = explode(',', $this->settings['publicaciones_a_mostrar']);

        $publicaciones_a_mostrar = [];
        foreach ($uids_publicaciones_a_mostrar as $uid) {
            $publicaciones_a_mostrar[] = $this->publicacionRepository->findByUid($uid);
        }        


        $this->view->assignMultiple([
            'uri_background' => $uri_background, 
            'uri_imagen_link' => $uri_imagen_link, 
            'uri_link' => $uri_link, 
            'titulo_link' => $titulo_link, 
            'texto_link' => $texto_link, 
            'publicaciones' => $publicaciones_a_mostrar
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
