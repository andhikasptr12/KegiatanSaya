@component('mail::message')

<p>Hallo, {{$register->user->name}}</p>
<p>Terimakasih telah melakukan pendaftaran dalam kegiatan kami.
    silahkan buka link ini untuk melakukan upload bukti pembayaran anda
    dengan kode pembayaran
</p>
<P>Kode Pendaftaran : {{$register->activity->kode_activity}}</P>
<P>Jumlah Tiket : {{$register->qty}}</P>
<P>Total Pembayaran : {{$register->qty * $register->activity->idr}}</P>
@component('mail::button',['url' => "http://localhost/KegiatanSaya/public/user/ambil-form/{$register->id}"])
    uploud pembayaran  
@endcomponent
@endcomponent