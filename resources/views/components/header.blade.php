
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampüs Group</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-black ">
<header class="grid grid-cols-3 border-b-2 border-yellow-400">
    <div class="m-4 grid">
        <a href="{{route("home")}}">
        <img class="w-64 " src="{{asset("images/logo.jpg")}}" alt="">
        </a>
    </div>
    <div class="m-4 grid text-center justify-center text-white">
        <a href="tel:+905358904888">
            535 890 48 88
        </a>
    </div>
    <div class="m-4 grid justify-end">
        <img class="w-64 " src="{{asset("images/logo.jpg")}}" alt="">
    </div>
</header>

