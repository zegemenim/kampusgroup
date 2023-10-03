@include("components.header")

<div class="w-full my-16 ">
    <div class="grid md:grid-cols-2 md:mx-[30vh]">
        <div class="">
            @php($i = 0)
            @foreach($images as $image)
                <img id="{{$i}}" src="{{asset("storage/uploads/$image")}}" class="hidden h-[50vh] max-h-[50vh] bg-center">
                @php($i++)
            @endforeach
            <div class="flex justify-between">
                <button class="py-6" onclick="previous()"><svg fill="#ddd" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 404.26 404.26" xml:space="preserve" stroke="#000000" stroke-width="0.00404258"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.808516"></g><g id="SVGRepo_iconCarrier"> <polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "></polygon> </g></svg></button>
                <button class="py-6" onclick="next()"><svg fill="#ddd" height="32px" width="32px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 404.258 404.258" xml:space="preserve" transform="rotate(180)"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <polygon points="289.927,18 265.927,0 114.331,202.129 265.927,404.258 289.927,386.258 151.831,202.129 "></polygon> </g></svg></button>
            </div>
        </div>
        <div class="">
            <h3 class="text-3xl text-center mb-4 font-bold">{{$advert->title}}</h3>
            @if($type == "arsa" || $type == "gayrimenkul")
                <p class="text-lg ml-20 mb-2"><span class="font-bold">İmar Durumu:</span> {{$advert->zoning}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">m²:</span> {{$advert->area}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Konum:</span> {{$advert->location}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Açıklama:</span> {{$advert->description}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Fiyat:</span> {{$advert->price}}₺</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Telefon:</span> {{$advert->phone}}</p>
            @endif
            @if($type == "dolmus" || $type == "plaka")
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Açıklama:</span> {{$advert->description}}₺</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Kira Bedeli:</span> {{$advert->bedel}}₺</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Fiyat:</span> {{$advert->price}}₺</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Araçlı/Araçsız:</span> {{$advert->vehicle == 1 ? "Araçlı" : "Araçsız"}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Fiyat:</span> {{$advert->price}}₺</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Telefon:</span> {{$advert->phone}}</p>
            @endif
            @if($type == "rentacar" || $type == "otomotiv")
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Başlık:</span> {{$advert->title}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Açıklama:</span> {{$advert->description}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Marka:</span> {{$advert->brand}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Model:</span> {{$advert->model}}</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Fiyat:</span> {{$advert->price}}₺</p>
                <p class="text-lg ml-20 mb-2"><span class="font-bold">Telefon:</span> {{$advert->phone}}</p>
            @endif
        </div>
    </div>
</div>

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
