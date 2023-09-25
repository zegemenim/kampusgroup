<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kampüs Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{asset("css/style.css")}}">

</head>
<body class="bg-black h-screen text-white">

<div id="toggleBar" class="hidden bg-[#1b1b1b] absolute h-screen w-[40%] right-[-40%] ease-in-out z-10" style="">
    <div class="flex h-full items-center">
        <ul class="ml-[15%] text-2xl md:text-4xl font-bold text-gray-400">
            <li class="text-white my-2 md:my-4"><a href="">Ana Sayfa</a></li>
            <li class="my-2 md:my-4"><a href="">Hakkımızda</a></li>
            <li class="my-2 md:my-4"><a href="">Projeler</a></li>
            <li class="my-2 md:my-4"><a href="">İlanlarımız</a></li>
            <li class="my-2 md:my-4"><a href="">İletişime Geç</a></li>
        </ul>
    </div>
</div>

<header class="grid grid-cols-2 md:grid-cols-3 border-b-2 border-yellow-400 h-[15%]">
    <div class="m-4 grid items-center">
        <a href="{{route("home")}}">
            <img class="w-64 " src="{{asset("images/logo.jpg")}}" alt="">
        </a>
    </div>
    <div class="hidden md:grid m-4 text-center justify-center text-white items-center">

        <a href="tel:+905358904888"
           class="font-bold text-2xl text-center justify-center items-center flex text-yellow-300">
            <svg class="h-6 m-4" version="1.1" id="Phone-14" xmlns="http://www.w3.org/2000/svg"
                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 28.314 28.323" style="enable-background:new 0 0 28.314 28.323;" xml:space="preserve"
                 fill="#FCD34D">
<path d="M27.728,20.384l-4.242-4.242c-0.377-0.378-0.879-0.586-1.413-0.586c0,0-0.001,0-0.002,0c-0.534,0-1.036,0.209-1.413,0.586
	l-2.828,2.828l-8.485-8.485l2.828-2.828c0.78-0.78,0.78-2.05-0.001-2.83L7.929,0.585C7.552,0.208,7.05,0,6.516,0H6.515
	C5.98,0,5.478,0.209,5.101,0.587L0.858,4.83C0.729,4.958-0.389,6.168,0.142,8.827c0.626,3.129,3.246,7.019,7.787,11.56
	c6.499,6.499,10.598,7.937,12.953,7.937c1.63,0,2.426-0.689,2.604-0.867l4.242-4.242c0.378-0.378,0.587-0.881,0.586-1.416
	C28.314,21.265,28.106,20.762,27.728,20.384z M22.072,26.042c-0.028,0.028-3.409,2.249-12.729-7.07
	C-0.178,9.452,2.276,6.243,2.272,6.244L6.515,2l4.243,4.244L7.223,9.779c-0.391,0.391-0.391,1.023,0,1.414l9.899,9.899
	c0.391,0.391,1.023,0.391,1.414,0l3.535-3.536l4.243,4.244L22.072,26.042z"/>
</svg>
            0535 890 48 88
        </a>
    </div>
    <div class="m-4 grid justify-end text-center items-center">
        <button onclick="toggleMenuBar()" class="z-10">
            <svg class="" id="menu_bar" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="40px"
                 height="40px" fill="#FCD34D">
                <path
                    d="M 3 7 A 1.0001 1.0001 0 1 0 3 9 L 27 9 A 1.0001 1.0001 0 1 0 27 7 L 3 7 z M 3 14 A 1.0001 1.0001 0 1 0 3 16 L 27 16 A 1.0001 1.0001 0 1 0 27 14 L 3 14 z M 3 21 A 1.0001 1.0001 0 1 0 3 23 L 27 23 A 1.0001 1.0001 0 1 0 27 21 L 3 21 z"/>
            </svg>
            <svg class="hidden" id="cross" fill="#FCD34D" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 0 490 490" xml:space="preserve">
<polygon points="456.851,0 245,212.564 33.149,0 0.708,32.337 212.669,245.004 0.708,457.678 33.149,490 245,277.443 456.851,490
	489.292,457.678 277.331,245.004 489.292,32.337 "/>
</svg>
        </button>
    </div>
</header>



<script>
    let val = 0;
    const toggleMenuBar = () => {
        let toggleBar = document.getElementById("toggleBar");
        let menu_bar = document.getElementById("menu_bar");
        let cross = document.getElementById("cross");
        if (val == 0) {
            val = 1;
            toggleBar.style.animation = "slideIn 0.3s forwards";
            toggleBar.classList.remove("hidden");
            menu_bar.classList.add("hidden");
            cross.classList.remove("hidden");
        }else{
            val = 0;
            toggleBar.style.animation = "slideOut 0.3s forwards";
            menu_bar.classList.remove("hidden");
            cross.classList.add("hidden");
            setTimeout(() => {
                toggleBar.classList.add("hidden")
            }, 300)
        }
    }
</script>

<style>
    @keyframes slideIn {
        from {
            right: -40%;
        }
        to {
            right: 0;
        }
    }

    @keyframes slideOut {
        from {
            right: 0;
        }
        to {
            right: -40%;
        }
    }
</style>


{{--<script>--}}
{{--    let value = 0;--}}
{{--    const toggleMenuBar = () => {--}}
{{--        let menu_bar = document.getElementById("menu_bar");--}}
{{--        let cross = document.getElementById("cross");--}}
{{--        if (value == 0) {--}}
{{--            value = 1;--}}
{{--            setTimeout(()=>{--}}
{{--                menu_bar.classList.add("hidden");--}}
{{--                cross.classList.remove("hidden")--}}
{{--            }, 500)--}}
{{--        }else {--}}
{{--            value=0;--}}
{{--            menu_bar.classList.remove("hidden");--}}
{{--            cross.classList.add("hidden")--}}
{{--        }--}}

{{--    }--}}
{{--</script>--}}
