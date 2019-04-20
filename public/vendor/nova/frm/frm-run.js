window.registerFormBuilder = function () {
    jQuery($ => {
        setTimeout(function () {
            try {
                const fbTemplate = document.getElementById('build-wrap');
                var formBuilder = $(fbTemplate).formBuilder();
                document.addEventListener('fieldAdded', function () {
                    Nova.$emit('frm-fieldAdded', formBuilder.actions.getData('json'));
                });
            } catch (err) {
                console.log('Cannot build form ',err);
            }

        }, 1000);
    });
};
