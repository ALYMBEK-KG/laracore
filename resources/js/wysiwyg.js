window.wysiwyg = {
    Jodit: (require('jodit')).Jodit,
    editorExist: document.querySelector('textarea.editor')
};

if (window.wysiwyg.Jodit && window.wysiwyg.editorExist) {
    window.wysiwyg.Jodit.make('textarea.editor', {
        language: document.documentElement.lang,
        uploader: {
            insertImageAsBase64URI: true
        }
    });
}
