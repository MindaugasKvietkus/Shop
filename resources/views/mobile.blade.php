@extends('base')
@section('continent')
@foreach($mobiles as $mobile )
<div class="col-lg-3 pull-left">
    <label class="col-lg-12" style="height:80px">{{ $mobile->name }}</label>
    <img src="{{ $mobile->picture  }}" width="304" height="300">
    <label class="col-lg-12">Kaina: {{ $mobile->price }} € <a class="btn btn-success pull-right" href="{{ route('addtocart', ['id' => $mobile->id]) }}" role="button">Prideti i krepseli</a></label>
</div>
@endforeach
@endsection