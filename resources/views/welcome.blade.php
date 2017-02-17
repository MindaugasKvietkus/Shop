@extends('base')
@section('continent')
    <div class="col-lg-6 col-lg-offset-3">
        <h3 style="text-align: center;">Isaugoti Uzsakymai</h3>
        @foreach($orders as $order)
            @if (empty($orders))
            @else
                <div class="col-lg-12">
                    <li><a href="{{ route('getOrder', ['id' => $order->id]) }}">{{ $order->payment_id }}</a></li>
                </div>
            @endif
        @endforeach
    </div>
    <div class="col-lg-6 col-lg-offset-3">
        <hr>
        <div class="col-lg-6">
            <label class="col-lg-12"><img src="/pc.png" width="304" height="300"></label>
            <label class="col-lg-12"><a class="btn btn-success center-block" href="/kategorija/kompiuteriai"
                                        role="button">Kompiuteriai</a></label>
        </div>
        <div class="col-lg-6">
            <label class="col-lg-12"><img src="/mobile_phones.jpg" width="304" height="300"></label>
            <label class="col-lg-12"><a class="btn btn-success center-block" href="/kategorija/mobilieji-telefonai"
                                        role="button">Mobilieji Telefonai</a></label>
        </div>
    </div>
@endsection