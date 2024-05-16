@php
    $username = 'Aulia Rahman Pakpahan';
    $role = '';
@endphp

@if ($role == 'Admin')
    <h3>Selamat Datang, {{ $username }}! Anda adalah seorang {{ $role }}</h3>
@else
    <h3> Selamat datang, {{ $username }}! Anda adalah seorang user</h3>
@endif
