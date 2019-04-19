@extends('nova::auth.layout')

@section('content')

@include('nova::auth.partials.header')

<form
    class="bg-white shadow rounded-lg p-8 max-w-login mx-auto"
    method="POST"
    action=""
>
    {{ csrf_field() }}

    @component('nova::auth.partials.heading')
        {{ __($form->title) }}
    @endcomponent

    @component('nova::auth.partials.heading')
        {{ __($form->description) }}
    @endcomponent

    @include('nova::auth.partials.errors')

    <div id="render-container"></div>

    <button class="w-full btn btn-default btn-primary hover:bg-primary-dark" type="submit">
        {{ __('Send Form') }}
    </button>
</form>

<script src="{{ mix('jquery.min.js', 'vendor/nova') }}"></script>
<script src="{{ mix('jquery-ui.min.js', 'vendor/nova') }}"></script>
<script src="{{ mix('form-render.min.js', 'vendor/nova') }}"></script>
<script>
    jQuery($ => {
        const formData = '{!! $form->fields !!}';
        const wrap = $('#render-container');
        const formRenderOpts = {wrap, formData, dataType: 'json'};
        wrap.formRender(formRenderOpts);
    });
</script>

@endsection
