@include("components.admin_header")

<div class="text-center justify-start items-start">
    <h3 class="text-2xl font-bold text-center mb-8">İlan Ekle</h3>
    <form action="" method="POST" class="" enctype="multipart/form-data">
        @csrf
        <div class="m-4">
            <div class="m-2"><label for="title" class="font-bold">Başlık</label></div>
            <input type="text" name="title" id="title" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="description" class="font-bold">Açıklama</label></div>
            <input type="text" name="description" id="description" class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="price" class="font-bold">Fiyat</label></div>
            <input type="text" name="price" id="price" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="area" class="font-bold">M²</label></div>
            <input type="text" name="area" id="area" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="location" class="font-bold">Konum</label></div>
            <input type="text" name="location" id="location" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="zoning" class="font-bold">İmar Durumu</label></div>
            <input type="text" name="zoning" id="zoning" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="phone" class="font-bold">Telefon</label></div>
            <input type="text" name="phone" id="phone" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>
        <div class="m-4">
            <div class="m-2"><label for="status" class="font-bold">İlan Durumu</label></div>
            <select type="text" name="status" id="status" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
                <option value="1">Aktif</option>
                <option value="0">Pasif</option>
                <option value="2">Satıldı</option>
            </select>
        </div>
        <div class="m-4">
            <div class="m-2"><label for="images" class="font-bold">Fotoğraflar</label></div>
            <input type="file" multiple name="images[]" id="images" required class="rounded-md bg-black border-2 border-yellow-400 outline-none">
        </div>

        <button class="border-2 border-yellow-400 p-2 rounded-md hover:bg-yellow-400">Gönder</button>
    </form>
</div>
