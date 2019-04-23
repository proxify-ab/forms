window.registerFormBuilder = function (initFormData) {
    jQuery($ => {
        setTimeout(function () {
            try {
                const fbTemplate = document.getElementById('build-wrap');
                var formBuilder = $(fbTemplate).formBuilder();
                // Fill form builder with init data
                if ((typeof initFormData !== 'undefined') && (initFormData.length > 10)) {
                    setTimeout(function () {
                        formBuilder.actions.setData(initFormData);
                    }, 700);
                }
                // Assign event to save / edit Form buttons
                let emitEventList = ['create-button', 'create-and-add-another-button', 'update-button', 'update-and-continue-editing-button'];
                for (let i=0; i<emitEventList.length; i++) {
                    $("button[dusk='"+emitEventList[i]+"']").click(function () {
                        Nova.$emit('frm-fieldAdded', formBuilder.actions.getData('json'));
                    });
                }
            } catch (err) {
                console.log('Cannot build form ',err);
            }
        }, 700);

    });
};