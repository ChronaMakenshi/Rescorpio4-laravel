<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redscorpio4 : Email</title>
</head>
<style>
    html{
        margin:0;
        padding:0;
    }
    body {
       background: #212529;
        color: #fff;
        margin:0;
        padding:0;
        font-family: Orbitron, sans-serif;
    }

    div {
        text-align: center;
    }

    ul {
        display: inline-block;
        text-align: left;
    }

    h1 {
        position:  absolute;
        font-size: 5em;
        font-weight: bold;
        text-align: center;
        filter: drop-shadow(4px 4px 10px rgba(250,0,0,0.99));
    }
    img {
        width: 100%;
        height: 350px;
    }
    .header {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 350px;
    }

    h2 {
        text-align: center;
        font-size: 2.5em;
    }

    p {
        font-size: 2em;
        text-align: center;
    }
</style>
<body>
<div class="header">
    <h1>Redscorpio4</h1>
    <img rel="preload" src="https://redscorpio4.com/img/Arbre.webp?w=3840&h=1320&fm=webp&s=5ca6a5d182acb601b4a90e392ff3828d" alt="Redscorpio4">
</div>
<div>
    <ul>
        <li>
            Nom : {{ $data['name'] }}
        </li>
        <li>
            E-mail : {{ $data['email'] }}
        </li>
    </ul>
</div>
<h2>**Message :**</h2>
<p>
    {{ $data['message'] }}
</p>
</body>
</html>
