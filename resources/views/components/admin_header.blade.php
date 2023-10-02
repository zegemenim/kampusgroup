<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampüs Group</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>


</head>
<body class="bg-black w-full h-screen text-white">

<div class="justify-center items-center text-center border-b-2 border-yellow-400 mb-8">
    <ul class="flex justify-center items-center text-center">
        <li class="flex"><a class="p-6 text-sky-50 duration-500 ease-in-out hover:text-blue-500" href="{{route("admin.home")}}">Ana Sayfa</a></li>
        <li class="flex"><a class="p-6 text-sky-50 duration-500 ease-in-out hover:text-blue-500" href="{{route("ilanlar")}}">İlanlar</a></li>
        <li class="flex"><a class="p-6 text-sky-50 duration-500 ease-in-out hover:text-blue-500" href="{{route("messages")}}">Mesajlar</a></li>
        <li class="flex"><a class="p-6 text-sky-50 duration-500 ease-in-out hover:text-blue-500" href="">Çıkış Yap</a></li>
    </ul>
</div>
