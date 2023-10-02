@include("components.header")

<main>
    <div class="">
        {{--        <div class="w-full text-center text-2xl md:text-4xl font-bold mt-16"><h2>Oto Yıkama</h2></div>--}}
        {{--        <div class="w-full text-center text-xl md:text-2xl text-gray-300 my-2"><h3></h3></div>--}}
        <video class="h-[85%] w-full" muted autoplay loop>
            <source src="{{asset("/otoyikama.mp4")}}" type="video/mp4">
        </video>

    </div>
    <div class="grid grid-cols-2 m-12">
        <div style="width: 80%" class="grid ">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Asmal%C4%B1evler,%20Kamp%C3%BCs%20Oto%20Y%C4%B1kama,%206601.%20Sokak,%20Pamukkale/Denizli+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
                <a href="https://www.maps.ie/population/">Calculate population in area</a></iframe>
        </div>
        <div>
            <div class="w-full text-center text-2xl md:text-4xl font-bold "><h2>Hakkımızda</h2></div>
            <div class=" my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in
                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum
            </div>
        </div>
    </div>
</main>


@include("components.footer")
