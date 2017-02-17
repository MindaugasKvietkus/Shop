@extends('base')
@section('continent')
    @if (Session::has('cart'))
                @foreach($products as $product)
                    <div class="col-lg-6 col-lg-offset-3">
                    <div class="clo-lg-12">
                        <h1 style="text-align: center ; border-bottom: 1px solid">Krepselis</h1>
                        <label class="col-lg-4"><img src="{{ $product['item']['picture'] }}" height="250px"></label>
                        <label class="col-lg-4"><strong>{{ $product['item']['name'] }}</strong></label>
                        <label class="col-lg-1"><span class="badge">{{$product['qty']}}</span></label>
                        <label class="col-lg-1"><span class="label label-success">{{ $product['price'] }} €</span></label>
                        <label class="col-lg-2">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Veiksmas <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('reduceByOne', ['id' => $product['item']['id']]) }}">Mazinti 1 vnt.</a></li>
                                    <li><a href="{{ route('remove', ['id' => $product['item']['id']]) }}">Salinti visus vnt.</a></li>
                                </ul>
                            </div>
                        </label>
                    </div>
                    </div>
                @endforeach
            <div class="col-lg-6 col-lg-offset-3">
            <div class="clo-lg-12" style="border-top: 1px solid">
                <div class="col-lg-12">
                <label class="col-lg-6" style="display: block; font-size: medium; text-align: center">Is viso: {{ $totalPrice }} €</label>
                <label class="pull-right"><a class="btn btn-success" href="{{ route('saveOrder') }}" role="button">Issaugoti krepseli</a>
                    <a class="btn btn-danger" href="{{ route('removeAll') }}" role="button">Salinti krepseli</a>
                </label>
                </div>
            </div>
            </div>
    @else
        <div class="col-lg-6 col-lg-offset-3">
            <div class="clo-lg-12">
                <h1 style="text-align: center ; border-bottom: 1px solid">Krepselis</h1>
                <h2 style="text-align: center">Nera prekiu</h2>
            </div>
        </div>
    @endif
@endsection