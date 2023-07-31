@extends('base')

@section('title', __('Server Error'))
@section('code', '500')
@section('content')
    <main class="text-white text-center py-24">
        <div>
            <div>
                <h1 class="bg-black border-y-4 border-red-900 text-white text-xl lg:text-5xl py-10 text-center">{{ __('redscorpio4.error.500') }}</h1>
            </div>
            <div>
                <p class="text-white mx-auto w-1/2 text-xs xl:text-sm 2xl:text-md 3xl:text-xl mt-10">
                    {{ __('redscorpio4.error.p500') }}
                </p>
            </div>
        </div>
        <div class="flex justify-center pt-10">
            <img src="{{ image('Neuneuerrorserver.png', 400, 400) }}" alt="Neuneu">
        </div>
    </main>
@endsection
@section('message', __('Server Error'))
