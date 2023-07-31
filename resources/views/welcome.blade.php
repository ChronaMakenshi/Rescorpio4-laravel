@extends('base')


@section('content')
<main>
    <section id="{{ __('redscorpio4.navbar.about') }}">
        <x-body-part.about></x-body-part.about>
    </section>
    <section id="{{ __('redscorpio4.navbar.last') }}">
        <x-body-part.last-album></x-body-part.last-album>
    </section>
    <section id="{{ __('redscorpio4.navbar.remixes') }}">
        <x-body-part.remixes></x-body-part.remixes>
    </section>
    <section id="{{ __('redscorpio4.navbar.original') }}">
        <x-body-part.orignal-tack></x-body-part.orignal-tack>
    </section>
    <section id="{{ __('redscorpio4.navbar.contact') }}">
     <x-body-part.contact></x-body-part.contact>
    </section>
</main>
@endsection