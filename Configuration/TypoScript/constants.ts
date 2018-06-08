
plugin.tx_publicacionesunal_tipospublicaciones {
    view {
        # cat=plugin.tx_publicacionesunal_tipospublicaciones/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:publicaciones_unal/Resources/Private/Templates/
        # cat=plugin.tx_publicacionesunal_tipospublicaciones/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:publicaciones_unal/Resources/Private/Partials/
        # cat=plugin.tx_publicacionesunal_tipospublicaciones/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:publicaciones_unal/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_publicacionesunal_tipospublicaciones//a; type=string; label=Default storage PID
        storagePid =
    }
}

plugin.tx_publicacionesunal_previewpublicaciones {
    view {
        # cat=plugin.tx_publicacionesunal_previewpublicaciones/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:publicaciones_unal/Resources/Private/Templates/
        # cat=plugin.tx_publicacionesunal_previewpublicaciones/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:publicaciones_unal/Resources/Private/Partials/
        # cat=plugin.tx_publicacionesunal_previewpublicaciones/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:publicaciones_unal/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_publicacionesunal_previewpublicaciones//a; type=string; label=Default storage PID
        storagePid =
    }
}
