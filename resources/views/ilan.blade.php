@include("components.header")

<div class="w-full my-16 ">
    <div class="grid md:grid-cols-2 md:mx-[30vh]">
        <div class="bg-[url({{asset("images/arsa/arsa.jpg")}})] bg-cover h-[50vh] max-h-[50vh] bg-center"></div>
        <div class="">
            <h3 class="text-3xl text-center mb-4 font-bold">{{$advert->title}}</h3>
            <p class="text-lg ml-20 mb-2"><span class="font-bold">İmar Durumu:</span> {{$advert->zoning}}</p>
            <p class="text-lg ml-20 mb-2"><span class="font-bold">m²:</span> {{$advert->area}}</p>
            <p class="text-lg ml-20 mb-2"><span class="font-bold">Konum:</span> {{$advert->location}}</p>
            <p class="text-lg ml-20 mb-2"><span class="font-bold">Fiyat:</span> {{$advert->price}}₺</p>
        </div>
    </div>
</div>

@include("components.footer")
