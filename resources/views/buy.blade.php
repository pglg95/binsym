@extends('master')
@section('content')
            <div class="row-fluid">
                <div class="statbox {{$colors[0]}} span12" ontablet="span12" ondesktop="span12">
                    <div class="number">{{$currency->code}}</div>
                    <div class="title">Obecny kurs: ({{$currency->updated_at->format('d-m-y')}} notowanie numer: {{$currency->updated_at->format('H')}}): {{$currency->current_rate}}</div>
                    <div style="float: left;">Stopa zwrotu mniej niż 2 dni: {{$currency->return_value_1}}%</div><br>
                    <div style="float: left;">Stopa zwrotu 2 dni lub więcej: {{$currency->return_value_2}}%</div>
                </div>
            </div>

            <div class="row-fluid">
                @if(Auth::user()->money >= 1)
                <div class="box yellow span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white white tasks"></i><span class="break"></span>Zakup opcji binarnych</h2>
                    </div>
                    <div class="box-content">
                        <form role="form" method="POST" action="{{ url('/boption/create') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="currency_id" value="{{$currency->id}}">
                            @if(count($errors) > 0)
                                <div class="alert-danger box-content">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                          <table class="table table-striped">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="slider sliderMin green ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-slider-range-min" style="width: 1.43062%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 1.43062%;"></a></div>
                                    <div class="field_notice">
                                        <table>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Zainwestowana kwota:</p>
                                                </td>
                                                <td>
                                                    <input type="text" name="value" class="sliderMinLabel" value="1" readonly >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Dzień i numer notowania:</p>
                                                </td>
                                                <td>
                                                    <div class="input-append date form_datetime">
                                                        <input size="16" type="text" value="" name="finish_date" id="date-time" readonly>
                                                        <span class="add-on"><i class="icon-th"></i></span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Twoja spekulacja:</p>
                                                </td>
                                                <td>
                                                    <label style="float:left; display:inline">
                                                        <input type="radio" name="speculation" value="up" />
                                                        <img src="{{ URL::asset('img/up.png') }}">
                                                    </label>
                                                    <label style="float:left; display:inline">
                                                        <input type="radio" name="speculation" value="down" />
                                                        <img src="{{ URL::asset('img/down.png') }}">
                                                    </label>
                                                </td>
                                            </tr>
                                            <!--<tr>
                                                <td>
                                                    <p style="color:black;">Przewidywany zysk:</p>
                                                </td>
                                                <td>
                                                    <span class="sliderProfit" style="color:black;">0.8 PLN</span>
                                                </td>
                                            </tr> -->
                                        </table>
                                        <input type="submit" value="Zatwierdź" class="btn btn-large btn-primary" style="float:right;">
                                    </div>
                                </td>
                            </tr>

                            </tbody></table>
                        </form>
                    </div>
                </div><!--/span-->
                @endif
            </div><!--/row-->

            <div class="row-fluid">

                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white th"></i><span class="break"></span>Informacje</h2>
                    </div>
                    <div class="box-content">
                        <ul class="nav tab-menu nav-tabs" id="myTab">


                            <li class="active"><a href="#messages">{{$currency->code}}</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content">


                            <div class="tab-pane active" id="messages">
                                <p>{{$currency->description}}</p>

                            </div>
                        </div>
                    </div>
                </div><!--/span-->
            </div>
@endsection
@section('dashboard_tab')
    <li>
@endsection

