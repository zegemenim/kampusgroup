@include("components.header")

<main>
    <div class="">
        {{--        <div class="w-full text-center text-2xl md:text-4xl font-bold mt-16"><h2>Oto Yıkama</h2></div>--}}
        {{--        <div class="w-full text-center text-xl md:text-2xl text-gray-300 my-2"><h3></h3></div>--}}
        <div class="">
            @php($i = 0)
            @foreach($images as $image)
                <img id="{{$i}}" src="{{asset("storage/uploads/$image")}}" class="h-[85%] w-ful">
                @php($i++)
            @endforeach
            <div class="flex justify-between">
                <button class="py-6" onclick="previous()"><svg fill="#ddd" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 404.26 404.26" xml:space="preserve" stroke="#000000" stroke-width="0.00404258"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.808516"></g><g id="SVGRepo_iconCarrier"> <polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "></polygon> </g></svg></button>
                <button class="py-6" onclick="next()"><svg fill="#ddd" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 404.258 404.258" xml:space="preserve" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "></polygon> </g></svg></button>
            </div>
        </div>
        <img src="{{asset("images/")}}" alt="" class="h-[85%] w-full">

    </div>
    <div class="grid grid-cols-2 m-12">
        <div style="width: 80%" class="grid ">
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


        </div>
    </div>
</main>


@include("components.footer")
