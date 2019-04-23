function drawFormWithTimeout(formData) {
    setTimeout(function () {
        try {
            const wrap = $('#render-container');
            const formRenderOpts = {wrap, formData, dataType: 'json'};
            wrap.formRender(formRenderOpts);
        } catch (err) {
            console.log('Cannot render form ',err);
        }
    }, 700);
}

window.registerRenderForm = function (formData) {
    jQuery($ => {
        drawFormWithTimeout(formData);
    });
};

window.registerFilledForm = function (form_fields, user_answer) {
    jQuery($ => {
        for (let key in user_answer) {
            for (let i=0; i<form_fields.length; i++) {
                if (form_fields[i].name == key) {

                    // Checkbox group
                    if (form_fields[i].type == "checkbox-group") {
                        for (let j=0; j<user_answer[key].length; j++) {
                            for (let k=0; k<form_fields[i].values.length; k++) {
                                if (form_fields[i].values[k].value == user_answer[key][j]) {
                                    form_fields[i].values[k].selected = true;
                                }
                            }
                        }
                    }
                    // Other elements: text, number, ...
                    else {
                        form_fields[i].value = user_answer[key];
                    }

                }
            }
        }
        drawFormWithTimeout(form_fields);
    });
};