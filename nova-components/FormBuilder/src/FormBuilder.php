<?php

namespace Frm\FormBuilder;

use Laravel\Nova\Fields\Field;

class FormBuilder extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'form-builder';

    public function drawcomplete($user_answer, $form_fields) {
        return $this->withMeta([
            'user_answer' => $user_answer,
            'form_fields' =>  $form_fields
        ]);
    }

}
