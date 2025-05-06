<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
    $setting = App\Models\Setting::first();
@endphp

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @if (request()->is('/'))
        <title>{{ $setting->home_title }}</title>
        <meta name="description" content="{{ $setting->home_description }}" />
        <meta name="keywords" content="{{ $setting->home_keywork }}" />
             <meta property="og:image" content="{{ url(Storage::url(App\Models\Setting::first()->home_banner)) }}">


    @endif
    <link rel="icon" type="image/png" href="{{Storage::url($setting->web_favicon)}}">
    {!! $setting->script_header !!}
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
    {!! $setting->script_footer !!}
</body>

<style>
    body.index.mm-wrapper {
    background: #046e47;
}
.elementor-kit-998 {

    /* --e-global-color-51288f4: #168549; */
    --e-global-color-51288f4: {{ $setting->consulting_color }};

}
</style>
</html>
