<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We’re going to talk about a shy, unsure and discrete electronic music composer.RedScorpio4 was born in France in the late 80’s and raised by a musician family, listening to punk, rock, metal and celtic music. They got quickly a real passion for electronic music (The 90’s hit something) and started to touch music composition at the age of 12 by using the Codemaster software Music 2000. They was a punk rock singer during some years but nothing too serious.Then, they experimented all sort of electronic music on FL Studio and Cubase, using Vocaloid and UTAU sometimes. We can’t say if they has a specific style because they can go from chill melodic music to absolute darkcore, passing throught some dubstep and synthwave, according to the mood and the inspiration (and the heaviness of the bass). They also like to do some video games BGM remixes because they is also a gamer, you know. Some projects are still in progress. Stay tuned.">
    <title>Redscorpio4</title>
    <link rel="icon" href="{{ image('FAVICON_REDCORPIO4.png', 30, 30) }}">
    @vite(['resources/css/app.css','resources/js/app.jsx'])
</head>

<body class="bg-neutral-800 font-body">
<header>
    <x-body-part.header></x-body-part.header>
</header>
@yield('content')
<x-body-part.footer></x-body-part.footer>
<script async src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-46212931-1" defer></script>
<script async >
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-46212931-1');
</script>
</body>
</html>