@extends('templates.template')

@section('content')
    <div class="container-fluid">
        <div class="text-center">
            <a onclick="setUtmSource(event, this)" href="http://www.pornhub.com?utm_source=domain&utm_medium=banner-paid&utm_campaign=hubtraffic_danybigpen1" border="0" target="_blank"><img alt="Pornhub Header" border="0" src="https://www.hubtraffic.com/_affiliate/banners/1543860092.png"/></a><br>
        </div>
        <home :page="{{ $page }}" />
    </div>
@endsection
