@include("components.admin_header")

<div class="overflow-x-auto">

    <table id="table" class="display" style="width:100%;">
        <thead class="">
        <tr>
            <th>İsim</th>
            <th>E-mail</th>
            <th>Telefon</th>
            <th>Konu</th>
            <th>Tarih</th>
            <th>Görüntüle</th>
            <th>Temizle</th>
        </tr>
        </thead>
        <tbody class="">
        @foreach($contacts as $contact)
            <tr class="">
                <td class="">{{$contact->name}}</td>
                <td class="">{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->created_at}}</td>
                <td><a href="{{route("show-message")}}/{{$contact->id}}">Görüntüle</a></td>
                <td><a href="#"
                       onclick="confirmDelete(event, '{{$contact->name}}', '{{route("delete_message")}}/{{$contact->id}}')">Sil</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            <th>İsim</th>
            <th>E-mail</th>
            <th>Telefon</th>
            <th>Konu</th>
            <th>Tarih</th>
            <th>Görüntüle</th>
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



