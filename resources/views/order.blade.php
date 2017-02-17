@extends('base')
@section('continent')
    @foreach($orders as $order)
        {{-- dd(get_defined_vars($order)) --}}
        <div class="col-lg-6 col-lg-offset-3">
            <div class="col-lg-12">
                <h1 style="text-align: center ; border-bottom: 1px solid">Krepselis</h1>
                <h1 style="text-align: center ; border-bottom: 1px solid">{{ $order->payment_id }}</h1>
                @foreach($order->cart->items as $item)
                    <div class="col-lg-12">
                        <label class="col-lg-5"><img src="{{ $item['item']['picture'] }}" height="250px"></label>
                        <label class="col-lg-5"><strong>{{ $item['item']['name'] }}</strong></label>
                        <label class="col-lg-1"><span class="badge">{{$item['qty']}}</span></label>
                        <label class="col-lg-1"><span class="label label-success">{{ $item['price'] }} €</span></label>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-6 col-lg-offset-3">
            <div class="clo-lg-12" style="border-top: 1px solid">
                <div class="col-lg-12">
                    <label class="col-lg-6" style="display: block; font-size: medium; text-align: center">Is
                        viso: {{$order->cart->totalPrice }} €</label>
                    <label class="pull-right"><a class="btn btn-success" href="{{ route('saveOrder') }}" role="button">Issaugoti
                            krepseli</a>
                        <a class="btn btn-danger" href="{{ route('removeAll') }}" role="button">Salinti krepseli</a>
                    </label>
                </div>
            </div>
        </div>
    @endforeach
@endsection