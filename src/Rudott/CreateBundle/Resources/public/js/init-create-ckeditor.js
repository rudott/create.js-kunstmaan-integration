jQuery(document).ready(function() {
    jQuery('body').midgardCreate({
        url: function() {
            if (this.id) {
                if (this.id.charAt(0) == "<") {
                    return cmfCreatePutDocument + this.id.substring(1, this.id.length - 1);
                }
                return cmfCreatePutDocument + this.id;
            }
            return cmfCreatePutDocument;
        },
        stanbolUrl: cmfCreateStanbolUrl,
        tags: true,
        editorWidgets: {
            'default': 'ckeditor'
        },
        editorOptions: {
            ckeditor: {
                widget: 'ckeditorWidget',
                options: {
                    filebrowserBrowseUrl: filebrowserBrowseUrl,
                    filebrowserWindowWidth: '580',
                    filebrowserImageBrowseUrl: filebrowserImageBrowseUrl,
                    filebrowserImageBrowseLinkUrl: filebrowserImageBrowseLinkUrl,
                    filebrowserImageWindowWidth: '900'
                }
            }
        },
        collectionWidgets: {
            'default': null,
            'feature': 'midgardCollectionAdd'
        },
        statechange: function (event, params) {
            if (params.hasOwnProperty('state') && params.state === 'edit') {
                $('.create-ui-toolbar-wrapper')
                    .addClass('editing');
            }

            if (params.hasOwnProperty('state') && params.state === 'browse') {
                $('.create-ui-toolbar-wrapper')
                    .removeClass('editing');
            }
        }
    });

    if (cmfCreateBrowseUrl) {
        window.CKEDITOR.config.filebrowserBrowseUrl = cmfCreateBrowseUrl;
    }

    window.CKEDITOR.basePath = window.CKEDITOR_BASEPATH;
});
