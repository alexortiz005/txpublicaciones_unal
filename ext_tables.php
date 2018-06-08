<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.PublicacionesUnal',
            'Tipospublicaciones',
            'Tipos Publicaciones'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'UNAL.PublicacionesUnal',
            'Previewpublicaciones',
            'Preview Publicaciones'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('publicaciones_unal', 'Configuration/TypoScript', 'Publicaciones UNAL');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_publicacionesunal_domain_model_tipo', 'EXT:publicaciones_unal/Resources/Private/Language/locallang_csh_tx_publicacionesunal_domain_model_tipo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_publicacionesunal_domain_model_tipo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_publicacionesunal_domain_model_publicacion', 'EXT:publicaciones_unal/Resources/Private/Language/locallang_csh_tx_publicacionesunal_domain_model_publicacion.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_publicacionesunal_domain_model_publicacion');

    }
);
