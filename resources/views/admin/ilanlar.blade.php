@include("components.admin_header")

<div class="w-full text-center">
    <a href="{{route("ilan-ekle")}}" class="w-full ease-in-out duration-300 bg-yellow-400 hover:bg-yellow-500 rounded-xl p-4">
        Arsa İlanı Ekle
    </a>
</div>

<table id="table" class="display" style="width:100%;">
    <thead class="">
    <tr>
        <th>Başlık</th>
        <th>Açıklama</th>
        <th>Konum</th>
        <th>Tip</th>
        <th>Oluşturulma Tarihi</th>
        <th>Son Değiştirilme Tarihi</th>
    </tr>
    </thead>
    <tbody class="">
    @foreach($adverts as $advert)
        <tr class="">
            <td class="">{{$advert->title}}</td>
            <td class="">{{$advert->description}}</td>
            <td>{{$advert->location}}</td>
            <td>{{$advert->type}}</td>
            <td>{{$advert->created_at}}</td>
            <td>{{$advert->updated_at}}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    <tr>
        <th>Başlık</th>
        <th>Açıklama</th>
        <th>Konum</th>
        <th>Tip</th>
        <th>Oluşturulma Tarihi</th>
        <th>Son Değiştirilme Tarihi</th>
    </tr>
    </tfoot>
</table>


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

</script>


