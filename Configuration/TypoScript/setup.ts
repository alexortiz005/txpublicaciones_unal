
plugin.tx_publicacionesunal_tipospublicaciones {
    view {
        templateRootPaths.0 = EXT:publicaciones_unal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_publicacionesunal_tipospublicaciones.view.templateRootPath}
        partialRootPaths.0 = EXT:publicaciones_unal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_publicacionesunal_tipospublicaciones.view.partialRootPath}
        layoutRootPaths.0 = EXT:publicaciones_unal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_publicacionesunal_tipospublicaciones.view.layoutRootPath}
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

plugin.tx_publicacionesunal_previewpublicaciones {
    view {
        templateRootPaths.0 = EXT:publicaciones_unal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_publicacionesunal_previewpublicaciones.view.templateRootPath}
        partialRootPaths.0 = EXT:publicaciones_unal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_publicacionesunal_previewpublicaciones.view.partialRootPath}
        layoutRootPaths.0 = EXT:publicaciones_unal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_publicacionesunal_previewpublicaciones.view.layoutRootPath}
    }
    persistence {
        storagePid = {$plugin.tx_publicacionesunal_previewpublicaciones.persistence.storagePid}
        #recursive = 1
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

page{
    includeCSS {
        tipos-publicaciones = EXT:publicaciones_unal/Resources/Public/Css/tipos-publicaciones.scss
        preview-publicaciones = EXT:publicaciones_unal/Resources/Public/Css/preview-publicaciones.scss
        animate = EXT:publicaciones_unal/Resources/Public/Css/animate.css
    }

    includeJS{
        wow = EXT:publicaciones_unal/Resources/Public/Js/wow.js  
       
    }

    includeJSFooter{
         masonry = EXT:publicaciones_unal/Resources/Public/Js/masonry.pkgd.js  
        publicaciones = EXT:publicaciones_unal/Resources/Public/Js/publicaciones.js 

    }
}


