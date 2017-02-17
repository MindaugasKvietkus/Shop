@extends('base')
@section('continent')
@foreach($computers as $computer )
    <div class="col-lg-3 pull-left">
        <label class="col-lg-12" style="height:80px">{{ $computer->name }}</label>
            <img src="{{ $computer->picture  }}" width="304" height="300">
        <label class="col-lg-12">Kaina: {{ $computer->price }} € <a class="btn btn-success pull-right" href="{{ route('addtocart', ['id' => $computer->id]) }}" role="button">Prideti i krepseli</a></label>
    </div>
@endforeach
    @endsection