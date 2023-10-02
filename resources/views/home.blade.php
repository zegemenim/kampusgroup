@include('components.header')

<div class="h-[85%] bg-center bg-cover bg-fixed bg-[url({{asset("images/logo2.jpg")}})]">

</div>

<main class="flex w-full">
    <div class="w-full">
        <div id="faaliyetler" class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">Faaliyet
                Alanlarımız</h2></div>
        <div class="grid md:grid-cols-4 gap-8 text-center mx-4">
            @foreach($files as $file)
                <div id="project_card"
                     class="duration-300 ease-in-out hover:shadow-lg hover:shadow-yellow-500 rounded-3xl">
                    @php($file_name = explode(".", basename($file))[0])
                    <a href="@if(Route::has($file_name)) {{route($file_name)}} @else {{route("home")}} @endif"><img
                            class="rounded-3xl" src="{{asset("images/projects/" . basename($file))}}"
                            alt="{{$file_name}}">
                    </a>
                </div>
            @endforeach
        </div>

        <div id="hakkimizda" class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">
                Hakkımızda</h2></div>
        <div class="grid md:grid-cols-5">
            <div class="mx-8 md:col-span-3 text-start justify-center items-center text-lg mb-8">{{$home->hakkimizda}}
            </div>
            <div class="md:col-span-2 grid md:grid-cols-2">
                @php($i = 0)
                @php($count = count($files_categories))
                @foreach($files_categories as $file)
                    <div id="project_card"
                         class="flex @if($count%2 == 1 && $i == $count-1) col-span-2 @endif mb-4 text-center justify-center items-center justify-items-center">
                        <img class="text-center justify-center items-center justify-items-center"
                             src="{{asset("images/categories/" . basename($file))}}" alt="">
                    </div>
                    @php($i++)
                @endforeach
            </div>
        </div>

        <div id="iletisim" class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">İletişime
                Geç</h2></div>

        <div class="grid md:grid-cols-2">
            <form action="" method="POST" class="grid md:grid-cols-2 items-center text-center gap-4 mx-4">
                @csrf
                <input name="name" type="text"
                       class="bg-black border-2 text-2xl border-yellow-400 rounded-full placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                       placeholder="Ad & Soyad">
                <input name="email" type="text"
                       class="bg-black border-2 text-2xl border-yellow-400 rounded-full placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                       placeholder="E-mail">
                <input name="phone" type="text"
                       class="bg-black border-2 text-2xl border-yellow-400 rounded-full placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                       placeholder="Telefon Numarası">
                <input name="subject" type="text"
                       class="bg-black border-2 text-2xl border-yellow-400 rounded-full placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                       placeholder="Konu">
                <textarea
                    class="bg-black border-2 text-2xl border-yellow-400 rounded-xl placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 md:col-span-2 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                    name="message" id="message" cols="30" rows="10" placeholder="Mesajınız..."></textarea>
                <button
                    class="md:col-span-2 text-xl rounded-full border-2 border-yellow-400 mx-[35%] duration-500 ease-in-out hover:bg-yellow-500 hover:shadow-2xl hover:shadow-yellow-400">
                    Gönder
                </button>
            </form>
        </div>
        <div>
            <div class="fixed bottom-5 right-5">
                <button id="scrollButton"
                        class="  text-white font-bold py-2 px-4 rounded-full opacity-0 transition-opacity duration-300">
                    <svg class="animate-bounce" fill="#facc15" height="64px" width="64px" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 330 330" xml:space="preserve" stroke="#facc15"><g id="SVGRepo_bgCarrier"
                                                                                        stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="XMLID_13_">
                                <path id="XMLID_14_"
                                      d="M175.605,104.393c-2.814-2.813-6.628-4.393-10.607-4.393c-3.979,0-7.794,1.581-10.607,4.394l-79.998,80 c-5.857,5.858-5.857,15.355,0.001,21.213c5.857,5.857,15.355,5.858,21.213-0.001l69.392-69.393l69.395,69.394 C237.322,208.536,241.161,210,245,210s7.678-1.464,10.606-4.394c5.858-5.858,5.858-15.355,0-21.213L175.605,104.393z"></path>
                                <path id="XMLID_15_"
                                      d="M165,0C74.019,0,0,74.019,0,165s74.019,165,165,165s165-74.019,165-165S255.981,0,165,0z M165,300 c-74.439,0-135-60.561-135-135S90.561,30,165,30s135,60.561,135,135S239.439,300,165,300z"></path>
                            </g>
                        </g></svg>
                </button>
            </div>
        </div>

    </div>

</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });

</script>
<script>
    var scrollButton = document.getElementById("scrollButton");

    window.addEventListener("scroll", function () {
        if (window.pageYOffset > 100) {
            scrollButton.classList.remove("opacity-0");
            scrollButton.classList.add("opacity-100");
        } else {
            scrollButton.classList.remove("opacity-100");
            scrollButton.classList.add("opacity-0");
        }
    });

    scrollButton.addEventListener("click", function () {
        var scrollToTop = window.setInterval(function () {
            var position = window.pageYOffset;
            if (position > 0) {
                window.scrollTo(0, position - 50); // 50, her adımda ne kadar yukarı kaydırılacağını belirler
            } else {
                clearInterval(scrollToTop);
            }
        }, 15); // Her 15 milisaniyede bir kaydırma işlemi gerçekleşir
    });
</script>

@include('components.footer')
