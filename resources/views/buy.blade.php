@extends('master')
@section('content')
            <div class="row-fluid">
                <div class="statbox orange span12" ontablet="span12" ondesktop="span12">
                    <div class="number">EUR/USD</div>
                    <div class="title">Obecny kurs: 4.85</div>
                    <div style="float: left;">Stopa zwrotu mniej niż 2 dni: 80%</div><br>
                    <div style="float: left;">Stopa zwrotu 2 dni lub więcej: 75%</div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="box yellow span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white white tasks"></i><span class="break"></span>Zakup opcji binarnych</h2>
                    </div>
                    <div class="box-content">
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
                                                    <input type="text" class="sliderMinLabel" value="1" disabled >
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Przewidywany zysk:</p>
                                                </td>
                                                <td>
                                                    <span class="sliderProfit" style="color:black;">0.8 PLN</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Dzień i godzina ukończenia:</p>
                                                </td>
                                                <td>
                                                    <div class="input-append date form_datetime">
                                                        <input size="16" type="text" value="" readonly>
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
                                                        <input type="radio" name="fb" value="small" />
                                                        <img src="{{ URL::asset('img/up.png') }}">
                                                    </label>
                                                    <label style="float:left; display:inline">
                                                        <input type="radio" name="fb" value="small" />
                                                        <img src="{{ URL::asset('img/down.png') }}">
                                                    </label>
                                                </td>
                                            </tr>
                                        </table>
                                        <button class="btn btn-large btn-primary" style="float:right;">Zatwierdź</button>
                                    </div>
                                </td>
                            </tr>

                            </tbody></table>
                    </div>
                </div><!--/span-->
            </div><!--/row-->

            <div class="row-fluid">

                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white th"></i><span class="break"></span>Informacje</h2>
                    </div>
                    <div class="box-content">
                        <ul class="nav tab-menu nav-tabs" id="myTab">


                            <li class="active"><a href="#messages">EUR/USD</a></li>
                        </ul>

                        <div id="myTabContent" class="tab-content">


                            <div class="tab-pane active" id="messages">
                                <p>
                                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                                </p>
                                <p>
                                    Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer
                                </p>
                            </div>
                        </div>
                    </div>
                </div><!--/span-->
            </div>
@endsection


