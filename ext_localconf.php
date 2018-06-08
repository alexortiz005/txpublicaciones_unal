<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.PublicacionesUnal',
            'Tipospublicaciones',
            [
                'Tipo' => 'list'
            ],
            // non-cacheable actions
            [
                'Tipo' => '',
                'Publicacion' => ''
            ]
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'UNAL.PublicacionesUnal',
            'Previewpublicaciones',
            [
                'Publicacion' => 'preview'
            ],
            // non-cacheable actions
            [
                'Tipo' => '',
                'Publicacion' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    tipospublicaciones {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('publicaciones_unal') . 'Resources/Public/Icons/user_plugin_tipospublicaciones.svg
                        title = LLL:EXT:publicaciones_unal/Resources/Private/Language/locallang_db.xlf:tx_publicaciones_unal_domain_model_tipospublicaciones
                        description = LLL:EXT:publicaciones_unal/Resources/Private/Language/locallang_db.xlf:tx_publicaciones_unal_domain_model_tipospublicaciones.description
                        tt_content_defValues {
                            CType = list
                            list_type = publicacionesunal_tipospublicaciones
                        }
                    }
                    previewpublicaciones {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('publicaciones_unal') . 'Resources/Public/Icons/user_plugin_previewpublicaciones.svg
                        title = LLL:EXT:publicaciones_unal/Resources/Private/Language/locallang_db.xlf:tx_publicaciones_unal_domain_model_previewpublicaciones
                        description = LLL:EXT:publicaciones_unal/Resources/Private/Language/locallang_db.xlf:tx_publicaciones_unal_domain_model_previewpublicaciones.description
                        tt_content_defValues {
                            CType = list
                            list_type = publicacionesunal_previewpublicaciones
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
