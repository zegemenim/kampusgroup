@include("components.header")

<main>
    <div class="">
        {{--        <div class="w-full text-center text-2xl md:text-4xl font-bold mt-16"><h2>Oto Yıkama</h2></div>--}}
        {{--        <div class="w-full text-center text-xl md:text-2xl text-gray-300 my-2"><h3></h3></div>--}}
        <div class="">
            @php($i = 0)
            @foreach($images as $image)
                <img id="{{$i}}" src="{{asset("otoyikama/$image")}}" class="h-[85%] w-full hidden">
                @php($i++)
            @endforeach
            <div class="flex justify-between">
                <button class="py-6" onclick="previous()"><svg fill="#ddd" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 404.26 404.26" xml:space="preserve" stroke="#000000" stroke-width="0.00404258"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.808516"></g><g id="SVGRepo_iconCarrier"> <polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "></polygon> </g></svg></button>
                <button class="py-6" onclick="next()"><svg fill="#ddd" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 404.258 404.258" xml:space="preserve" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "></polygon> </g></svg></button>
            </div>
        </div>

    </div>
    <div class="grid md:grid-cols-2 m-12">
        <div style="" class="mb-4 md:mx-4">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Asmal%C4%B1evler,%20Kamp%C3%BCs%20Oto%20Y%C4%B1kama,%206601.%20Sokak,%20Pamukkale/Denizli+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.maps.ie/population/">Calculate population in area</a></iframe>
        </div>
        <div>
            <div class="w-full text-center text-2xl md:text-4xl font-bold "><h2>Hakkımızda</h2></div>
            <div class=" my-4">Firmamız 2015 yılında otomotiv ve oto estetik entegre tesisi amacı ile 2500 M2 full kapsamlı
                açık-kapalı alan üzerinde kurulmuştur.

                Bir ilke imza atarak, tesis içerisinde müşteri hizmetlerine dair tüm mimari planlama doğrultusunda
                firmamızda açık - kapalı müşteri bekleme salonları ve cafeterya alanımız ile müşterilerimize samimi, güvenli,
                kaliteli ve konforlu bir hizmet anlayışıyla Denizli halkına otomotiv - oto estetik adına hizmet vermeye
                başladık.
            </div>
            <div class="w-full text-center text-2xl md:text-4xl font-bold "><h2>Vizyonumuz</h2></div>
            <div class=" my-4">Kampus A.Ş. olarak vizyonumuz profesyonel işinde uzman ekibimizle, her zaman için müşteri
                beklentilerinin üzerinde hizmet veren ve çağın gerektirdiği değişimlere açık ,  kendini yenileyebilen örnek
                teşkil eden kalıcı ve kurumsal bir marka olmaktır.
            </div>
            <div class="w-full text-center text-2xl md:text-4xl font-bold "><h2>İletişim</h2></div>
            <div class=" my-4 md:text-xl text-center">Telefon: <a class="ease-in-out duration-300 hover:text-blue-500" href="tel: +90 506 436 63 73">0506 436 63 73</a></div>
            <div class="flex justify-center items-center text-center">
                <a href="https://www.facebook.com/profile.php?id=1354128214"
                   class=" my-4  text-center justify-center items-center">
                    <svg fill="#2563EB" height="32px" width="32px" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         viewBox="0 0 310 310" xml:space="preserve" stroke="#2563EB"><g id="SVGRepo_bgCarrier"
                                                                                        stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="XMLID_834_">
                                <path id="XMLID_835_"
                                      d="M81.703,165.106h33.981V305c0,2.762,2.238,5,5,5h57.616c2.762,0,5-2.238,5-5V165.765h39.064 c2.54,0,4.677-1.906,4.967-4.429l5.933-51.502c0.163-1.417-0.286-2.836-1.234-3.899c-0.949-1.064-2.307-1.673-3.732-1.673h-44.996 V71.978c0-9.732,5.24-14.667,15.576-14.667c1.473,0,29.42,0,29.42,0c2.762,0,5-2.239,5-5V5.037c0-2.762-2.238-5-5-5h-40.545 C187.467,0.023,186.832,0,185.896,0c-7.035,0-31.488,1.381-50.804,19.151c-21.402,19.692-18.427,43.27-17.716,47.358v37.752H81.703 c-2.762,0-5,2.238-5,5v50.844C76.703,162.867,78.941,165.106,81.703,165.106z"></path>
                            </g>
                        </g></svg>
                </a>
                <a href="https://www.instagram.com/mustafayilmazkampus/"
                   class="text-center items-center justify-center justify-items-center ">

                    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 48 48" width="48px" height="48px">
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#fd5"/>
                            <stop offset=".328" stop-color="#ff543f"/>
                            <stop offset=".348" stop-color="#fc5245"/>
                            <stop offset=".504" stop-color="#e64771"/>
                            <stop offset=".643" stop-color="#d53e91"/>
                            <stop offset=".761" stop-color="#cc39a4"/>
                            <stop offset=".841" stop-color="#c837ab"/>
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8ma)"
                              d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/>
                        <radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813"
                                        gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                        gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#4168c9"/>
                            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"/>
                        </radialGradient>
                        <path fill="url(#yOrnnhliCrdS2gy~4tD8mb)"
                              d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/>
                        <path fill="#fff"
                              d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/>
                        <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/>
                        <path fill="#fff"
                              d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/>
                    </svg>
                </a>
            </div>
            </div>



        </div>
    </div>
</main>

<script>
    let i = 0;
    let images = [];
    @foreach($images as $image)
    images.push("{{$image}}");
    @endforeach
    const next = () => {
        document.getElementById(i).classList.add("hidden");
        if (i === images.length-1) {
            i = 0;
        } else {
            i++;
        }
        document.getElementById(i).classList.remove("hidden");
    }
    const previous = () => {
        document.getElementById(i).classList.add("hidden");
        if (i === 0) {
            i = images.length-1;
        } else {
            i--;
        }
        document.getElementById(i).classList.remove("hidden");
    }
    next();
</script>

@include("components.footer")
