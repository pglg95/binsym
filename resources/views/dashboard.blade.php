@extends('master')
@section('content')
    @foreach($currencies as $currency)
        @if($loop->index % 4 ==0)
            <div class="row-fluid">
        @endif
                <div class="statbox {{$colors[$loop->index]}} span6" ontablet="span6" ondesktop="span3">
                    <div class="number">{{$currency[0]}}</div>
                    <div class="title">Wartość: {{$currency[1]}}</div>
                    <div class="footer">
                        <a href="#">Inwestuj</a>
                    </div>
                </div>
        @if($loop->index % 4 ==3)
           </div>
        @endif
    @endforeach
@endsection

