<div class="lg:my-48 my-12">
    <div class="bg-black">
        <h2 class="bg-black text-white text-xl lg:text-5xl py-10 lg:py-20 text-center">{{ __('redscorpio4.navbar.contact') }}</h2>
        <div class="flex max-lg:flex-col-reverse lg:justify-evenly lg:mx-auto">
            <div class="bg-red-900 px-12 py-24 lg:-mb-24 lg:w-1/4 4xl:w-1/3 ">
                <x-alert></x-alert>
                <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        @include('components.input', [ 'type' => 'name', 'name' => 'name', 'placeholder' => 'Name','value' => '' ])
                    </div>
                    <div class="my-8">
                        @include('components..input', ['type' => 'email', 'name' => 'email', 'placeholder' => 'E-mail', 'value' => ''])
                    </div>
                    <div class="mb-8">
                        @include('components..input', ['type' => 'textarea', 'name' => 'message', 'placeholder' => 'Message','value' => ''])
                    </div>
                    <div class="my-8">
                        <div>
                            {!! NoCaptcha::renderJs(app()->getLocale()) !!}
                            {!! NoCaptcha::display() !!}
                        </div>
                        <div>
                            @if ($errors->has('g-recaptcha-response'))
                                <div class="bg-red-700 text-center font-bold border border-black rounded mt-2">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <x-button></x-button>
                </form>
            </div>
            <div class="flex lg:items-end justify-center lg:pb-24 pb-12">
                <x-logo-social></x-logo-social>
            </div>
        </div>
    </div>
</div>