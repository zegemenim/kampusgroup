@include("components.admin_header")

<div class="w-full flex overflow-x-auto text-center my-4">
    <a href="{{route("ilan-ekle")}}/arsa"
       class="w-full mx-2 ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        Arsa İlanı Ekle
    </a>
    <a href="{{route("ilan-ekle")}}/gayrimenkul"
       class="w-full mx-2 ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        Gayrimenkul İlanı Ekle
    </a>
    <a href="{{route("ilan-ekle")}}/dolmus"
       class="w-full mx-2 ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        Dolmuş Hattı İlanı Ekle
    </a>
    <a href="{{route("ilan-ekle")}}/insaat"
       class="w-full mx-2 ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        İnşaat İlanı Ekle
    </a>
    <a href="{{route("ilan-ekle")}}/rentacar"
       class="w-full mx-2 ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        Rent A Car İlanı Ekle
    </a>
    <a href="{{route("ilan-ekle")}}/otomotiv"
       class="w-full mx-2 ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        Otomotiv İlanı Ekle
    </a>
</div>

<div class="overflow-x-auto">

    <table id="table" class="display">
        <thead class="">
        <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Tip</th>
            <th>Oluşturulma Tarihi</th>
            <th>Son Değiştirilme Tarihi</th>
            <th>Temizle</th>
        </tr>
        </thead>
        <tbody class="">
        @foreach($adverts as $advert)
            <tr class="">
                <td class="">{{$advert->title}}</td>
                <td class="">{{$advert->description}}</td>
                <td>{{$advert->type}}</td>
                <td>{{$advert->created_at}}</td>
                <td>{{$advert->updated_at}}</td>
                <td><a href="{{route("delete_advert")}}/{{$advert->type}}/{{$advert->id}}" >Sil</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>Başlık</th>
            <th>Açıklama</th>
            <th>Tip</th>
            <th>Oluşturulma Tarihi</th>
            <th>Son Değiştirilme Tarihi</th>
            <th>Temizle</th>
        </tr>
        </tfoot>
    </table>

</div>

<script>
    $(document).ready(function () {
        $('#table').DataTable({
            order: [[1, "desc"]],
            language: {
                "emptyTable": "Tabloda herhangi bir veri mevcut değil",
                "info": "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
                "infoEmpty": "0 kayıttan 0 - 0 arasındaki kayıtlar gösteriliyor",
                "infoFiltered": "(_MAX_ kayıt içerisinden filtrelendi)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "_MENU_ kayıt göster",
                "loadingRecords": "Kayıtlar yükleniyor...",
                "processing": "İşleniyor...",
                "search": "Ara:",
                "zeroRecords": "Eşleşen kayıt bulunamadı",
                "paginate": {
                    "first": "İlk",
                    "last": "Son",
                    "next": "Sonraki",
                    "previous": "Önceki"
                },
                "aria": {
                    "sortAscending": ": artan sıralama",
                    "sortDescending": ": azalan sıralama"
                }
            }
        });
    });

    function confirmDelete(event, title, deleteUrl) {
        event.preventDefault();
        if (confirm(title + ' başlıklı ilanı silme işlemine devam etmek istiyor musunuz?')) {
            window.location.href = deleteUrl;
        }
    }


</script>


