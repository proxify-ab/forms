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

    <div class="mb-6 {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="email">{{ __('Email Address') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <button class="w-full btn btn-default btn-primary hover:bg-primary-dark" type="submit">
        {{ __('Send Form') }}
    </button>
</form>
@endsection
