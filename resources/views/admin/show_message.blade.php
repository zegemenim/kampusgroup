@include("components.admin_header")

<div class="" id="message">
    <div class="w-full text-center text-4xl md:text-6xl font-bold my-16"><h2 class="">Mesaj</h2></div>
    <div class="text-center font-bold">İsim & Soyisim</div>
    <div class="text-center mb-6">{{$contact->name}}</div>
    <div class="text-center font-bold">E-mail</div>
    <div class="text-center mb-6">{{$contact->email}}</div>
    <div class="text-center font-bold">Telefon</div>
    <div class="text-center mb-6">{{$contact->phone}}</div>
    <div class="text-center font-bold">Konu</div>
    <div class="text-center mb-6">{{$contact->subject}}</div>
    <div class="text-center font-bold">Mesaj</div>
    <div class="text-center mb-6">{{$contact->message}}</div>

</div>
