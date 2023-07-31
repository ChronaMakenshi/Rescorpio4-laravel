@extends('base')

@section('title', __('Not Found'))
@section('code', '404')
@section('content')
<main class="text-white text-center py-24">
    <div>
        <div>
            <h1 class="bg-black border-y-4 border-red-900 text-white text-xl lg:text-5xl py-10 text-center">{{ __('redscorpio4.error.404') }}</h1>
        </div>
        <div>
            <p class="text-white mx-auto w-1/2 text-xs xl:text-sm 2xl:text-md 3xl:text-xl mt-10">{{ __('redscorpio4.error.p1') }}
                <a class="text-red-900 bg-black p-1 hover:bg-red-900 hover:text-black" href="/">{{ __('redscorpio4.error.p2') }}</a> {{ __('redscorpio4.error.p3') }}
            </p>
        </div>
    </div>
    <div class="flex justify-center pt-10">
        <img src="/404/Neuneu_404.gif" alt="Neuneu">
    </div>
</main>
@endsection
@section('message', __('Not Found'))
