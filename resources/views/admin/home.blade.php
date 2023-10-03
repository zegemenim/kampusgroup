@include("components.admin_header")
<div class="text-center justify-start items-start">
    <h3 class="text-2xl font-bold text-center mb-8">Düzenle</h3>
    <form action="" method="POST" class="">
        @csrf
        <div class="m-4">
            <div class="m-2"><label for="hakkimizda" class="font-bold">Hakkımızda</label></div>
            <textarea name="hakkimizda" id="hakkimizda" required class="rounded-md bg-black border-2 border-yellow-400 outline-none " cols="100" rows="15">{{$home->hakkimizda}}</textarea>
        </div>
{{--        <div class="m-4">--}}
{{--            <div class="m-2"><label for="images" class="font-bold">Ana Sayfa Fotoğrafı</label></div>--}}
{{--            <input type="file"  name="images" id="images" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">--}}
{{--                    </div>--}}
{{--        <div class="m-4">--}}
{{--            <div class="m-2"><label for="images" class="font-bold">İletişime Geç Fotoğrafı</label></div>--}}
{{--            <input type="file"  name="images" id="images" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">--}}
{{--                    </div>--}}

        <button class="border-2 border-yellow-400 p-2 rounded-md hover:bg-yellow-400 ">Kaydet</button>
    </form>
</div>
