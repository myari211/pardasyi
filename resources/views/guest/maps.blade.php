@extends('guest.layouts.app')
@section('content')
<div class="container">
    <div class="row d-flex align-items-center" style="margin-top:100px;">
        <div class="col-md-6 animated fadeInLeftBig">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2067584356973!2d106.86681241537009!3d-6.236455662808974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3bd9a6312e3%3A0x486084d26df02856!2sPT%20ASSYIFA%20BERKAH%20ABADI%20EXPORT%20-%20IMPORT!5e0!3m2!1sid!2sid!4v1599091875237!5m2!1sid!2sid" width="90%" height="700px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-6 animated fadeInRightBig">
            <img src="{{ asset('image/usa.svg') }}" style="width:120%">
        </div>
    </div>
</div>

@endsection