@include("components.header")

<main>
    <div class="">
        <div class="w-full text-center text-2xl md:text-4xl font-bold mt-16"><h2>Arsalar</h2></div>
        <div class="w-full text-center text-xl md:text-2xl text-gray-300 my-2"><h3>Açıklama/Slogan</h3></div>
        <div class="grid md:grid-cols-3 gap-4 mx-4">
            <div class="grid md:grid-cols-1 p-4" id="card">
                <div class="relative inline-block">
                    <a href="{{route("ilan")}}/1" class="flex text-black hover:text-white ease-in-out duration-700">
                        <div class="bg-[url({{asset("images/arsa/arsa.jpg")}})] z-10 bg-auto bg-center max-h-[30vh] h-[30vh] ease-in-out duration-700 hover:opacity-30 w-full"></div>
                        <div class="absolute top-1/2 m-2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 p-2 h-full w-full ">
                            <p><span class="font-bold">ARSA:</span> kadgsa</p>
                            <p><span class="font-bold">ARSA:</span> kadgsa</p>
                            <p><span class="font-bold">ARSA:</span> kadgsa</p>
                            <p><span class="font-bold">ARSA:</span> kadgsa</p>
                            <p><span class="font-bold">ARSA:</span> kadgsa</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

@include("components.footer")
