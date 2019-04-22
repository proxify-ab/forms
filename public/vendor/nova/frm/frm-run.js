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
                    }, 500);
                }
                // Assign event to add new field from
                document.addEventListener('fieldAdded', function () {
                    Nova.$emit('frm-fieldAdded', formBuilder.actions.getData('json'));
                });
            } catch (err) {
                console.log('Cannot build form ',err);
            }

        }, 500);
    });
};