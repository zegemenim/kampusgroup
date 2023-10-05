@include("components.header")

<main>
    <div class="">
        <div class="w-full text-center text-2xl md:text-4xl font-bold mt-16"><h2>İnşaat Tadilat Projemiz</h2></div>
        <div class="w-full text-center text-xl md:text-2xl text-gray-300 my-2"><h3></h3></div>
        <div class="grid md:grid-cols-3 gap-4 mx-4">

            @foreach($adverts as $advert)
                <div class="grid md:grid-cols-1 p-4" id="card">
                    <div class="relative inline-block">
                        <div class="flex ">
                            @php($image = json_decode($advert->image)[0])
                            <img src="{{asset("/storage/uploads/" . $image)}}" alt="" class="max-h-[30vh]">
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</main>

@include("components.footer")

<style>
    .bg-cover {
        background-size: cover;
    }
</style>
