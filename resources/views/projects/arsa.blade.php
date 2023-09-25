@include("components.header")

<main>
    <div class="">
        <div class="w-full text-center text-2xl md:text-4xl font-bold mt-16"><h2>Arsalar</h2></div>
        <div class="w-full text-center text-xl md:text-2xl text-gray-300 my-2"><h3>Açıklama/Slogan</h3></div>
        <div class="grid md:grid-cols-2 gap-4 mx-4">
            <div class="grid md:grid-cols-2 border-2 border-yellow-400 p-4" id="card">
                <div class="bg-[url({{asset("images/arsa/arsa.jpg")}})] h-[50vh] bg-auto bg-center"></div>
                <div class="justify-center mx-4">
                    <h4 class="text-2xl justify-center text-center">Arsa 1</h4>
                    <p class="justify-center items-center"><span class="font-bold">Konum:</span> Altıntepe Sarayköy/Denizli</p>
                    <p class="justify-center items-center"><span class="font-bold">M2:</span> 925m2</p>
                    <p class="justify-center items-center"><span class="font-bold">Konum:</span> Altıntepe Sarayköy/Denizli</p>
                    <p class="justify-center items-center"><span class="font-bold">M2:</span> 925m2</p>
                    <p class="justify-center items-center"><span class="font-bold">Konum:</span> Altıntepe Sarayköy/Denizli</p>
                    <p class="justify-center items-center"><span class="font-bold">M2:</span> 925m2</p>
                    <p class="justify-center items-center"><span class="font-bold">Konum:</span> Altıntepe Sarayköy/Denizli</p>
                    <p class="justify-center items-center"><span class="font-bold">M2:</span> 925m2</p>
                    <div class="items-center justify-center text-center">
                        <a href="" class="border-2 border-yellow-400 rounded-full justify-center text-center items-center hover:bg-amber-500 ease-in-out duration-300 w-[]">İncele</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@include("components.footer")
