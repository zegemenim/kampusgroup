@include('components.header')

<div class="h-[85%] bg-[url({{asset("images/menu-bg.jpg")}})]">

</div>

<main class="flex w-full">
    <div class="w-full">
        <div class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">Projelerimiz</h2></div>
        <div class="grid md:grid-cols-4 gap-8 text-center mx-4">
            @foreach($files as $file)
                <div id="project_card"
                     class="duration-300 ease-in-out hover:shadow-lg hover:shadow-yellow-500 rounded-3xl">
                    @php($file_name = explode(".", basename($file))[0])
                    <a href="@if(Route::has($file_name)) {{route($file_name)}} @else {{route("home")}} @endif"><img
                            class="rounded-3xl" src="{{asset("images/projects/" . basename($file))}}" alt="{{$file_name}}">
                    </a>
                </div>
            @endforeach
        </div>

        <div class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">Hakkımızda</h2></div>
        <div class="grid md:grid-cols-5">
            <div class="mx-8 md:col-span-3 text-start justify-center items-center text-lg mb-8">Lorem ipsum dolor sit
                amet, consectetur
                adipisicing elit. Atque earum eligendi et explicabo, illo iste minus nostrum odio omnis provident quas
                quis sapiente, voluptatibus. Eum molestiae obcaecati perspiciatis ut velit? Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Ab adipisci aliquid eaque eveniet id impedit incidunt laboriosam,
                laudantium nesciunt, nihil nostrum porro praesentium provident quisquam quo temporibus ullam voluptate!
                Consequatur. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto atque consequatur
                explicabo inventore iste magnam optio quod repellat tempore temporibus. Alias cupiditate deserunt
                dignissimos eos, minus odio qui quisquam voluptates.
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

        <div class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">İletişime Geç</h2></div>

        <div class="grid md:grid-cols-2">
            <form action="" method="POST" class="grid md:grid-cols-2 items-center text-center gap-4 mx-4">
                <input name="name" type="text"
                       class="bg-black border-2 text-2xl border-yellow-400 rounded-full placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                       placeholder="Ad & Soyad">
                <input name="email" type="text"
                       class="bg-black border-2 text-2xl border-yellow-400 rounded-full placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                       placeholder="E-mail">
                <textarea
                    class="bg-black border-2 text-2xl border-yellow-400 rounded-xl placeholder:text-gray-100 justify-center items-center placeholder:text-lg placeholder:opacity-50 text-center outline-none focus:ring-1 focus:ring-yellow-400 md:col-span-2 ease-in-out duration-300 focus:shadow-yellow-500 focus:shadow-md hover:shadow-yellow-500 hover:shadow-md"
                    name="message" id="message" cols="30" rows="10" placeholder="Mesajınız..."></textarea>
                <button
                    class="md:col-span-2 text-xl rounded-full border-2 border-yellow-400 mx-[35%] duration-500 ease-in-out hover:bg-yellow-500 hover:shadow-2xl hover:shadow-yellow-400">
                    Gönder
                </button>
            </form>
        </div>

    </div>

</main>

@include('components.footer')
