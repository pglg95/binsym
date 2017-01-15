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
                            @if(count($errors) > 0 && !$errors->has('title') && !$errors->has('text'))
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
            <section id="art">
            <div class="row-fluid">

                <div class="box span12">
                    <div class="box-header">
                        <h2><i class="halflings-icon white th"></i><span class="break"></span>Najnowsze artykuły użytkowników</h2>
                    </div>
                    <div class="box-content">
                        <div style="width:100%; margin: 0;position: relative;">
                            @foreach($articles as $article)
                            <div>

                                <div class="header">
                                    <h1>{{$article->title}}</h1><br>
                                    @php($user=\App\User::where('id','=',$article->user_id)->get()[0])
                                    <div class="from"><i class="halflings-icon user"></i>{{$user->name}} <b></b> /{{$user->email}} </div><br>
                                    <div class="date"><i class="halflings-icon time"></i>{{$article->created_at}} </div><br>

                                    <div class="menu"></div>

                                </div>

                                <div class="content">
                                    <p>
                                        {{$article->text}}
                                    </p>
                                </div>
                            </div>
                            @if($loop->index == (count($articles)-1))
                                <br><br>
                            @endif
                            @endforeach
                            <button tabindex="3" type="submit" style="margin-bottom: 5px;" onclick="articleFormAction()" class="btn btn-success">Dodaj własny artukuł</button>
                                @if(count($errors) > 0)
                                    <div class="alert-danger box-content">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                @if($errors->has('title') || $errors->has('text'))
                                                    <li>{{ $error }}</li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                @if(!$errors->has('title') && !$errors->has('text'))
                                    <form class="replyForm showable" method="post" action="{{url('/articles/create')}}" hidden style="margin-top: 5px;">
                                @else
                                    <form class="replyForm showable" method="post" action="{{url('/articles/create')}}" style="margin-top: 5px;">
                                 @endif
                                {{ csrf_field() }}
                                <input type="hidden" name="currency_id" value="{{$currency->id}}">
                                <fieldset>
                                    <input type="text" class="input-xlarge span12" name="title" placeholder="Tytuł">
                                    <textarea tabindex="3" class="input-xlarge span12" id="message" name="text" rows="12" placeholder="Treść"></textarea>

                                    <div class="actions">

                                        <input type="submit" value="Opublikuj" class="btn btn-large btn-primary" style="float:right;">

                                    </div>

                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div><!--/span-->
            </div>
            </section>

@endsection
@section('dashboard_tab')
    <li>
@endsection
@section('js')
            <script src="{{ URL::asset('js/jquery.radioImageSelect.js') }}"></script>
            <script type="text/javascript">
                Date.prototype.addHours = function(h) {
                    this.setTime(this.getTime() + (h*60*60*1000));
                    return this;
                }
                function getStartDate(){
                    var date=new Date();
                    date.setHours({{$currency->updated_at->format('H')+1}})
                    return date;
                }

                if($(".form_datetime").length){
                    $(".form_datetime").datetimepicker({
                        format: "d-m-yyyy H",
                        maxView: 3,
                        minView: 1,
                        language: 'pl',
                        todayBtn: false,
                        startDate: getStartDate(),
                        autoclose: true
                    });
                }

            </script>
            <script>
                $(".sliderSimple").slider();

                $(".sliderMin").slider({
                    range: "min",
                    value: 1,
                    min: 1,
                    max: {{Auth::user()->money}},
                    slide: function( event, ui ) {
                        $( ".sliderProfit" ).html(ui.value*0.8);
                        $(".sliderMinLabel").val(ui.value);
                    }
                });
            </script>
            <script>
                function articleFormAction(){
                    $('.showable').toggle('slow');
                }
            </script>
@endsection
