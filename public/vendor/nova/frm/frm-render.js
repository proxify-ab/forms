window.registerRenderForm = function (formData) {
    jQuery($ => {
        setTimeout(function () {
            try {
                const wrap = $('#render-container');
                const formRenderOpts = {wrap, formData, dataType: 'json'};
                wrap.formRender(formRenderOpts);
            } catch (err) {
                console.log('Cannot render form ',err);
            }
        }, 500);
    });
};
