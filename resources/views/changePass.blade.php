@extends('master')
@section('content')
    <div class="row-fluid">

        <div class="box span12">
            <div class="box-header">
                <h2><i class="halflings-icon white th"></i><span class="break"></span>Zmiana hasła</h2>
            </div>
            <div class="box-content">
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active" id="messages">
                                    <div class="field_notice">
                                        <form role="form" method="POST" action="{{ url("/users/changePass") }}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="userId" value="{{$userId}}">
                                            @if(count($errors) > 0)
                                                <div class="alert-danger box-content">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif

                                            <table>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Obecne hasło:</p>
                                                </td>
                                                <td>
                                                    <input type="password" class="form-control" name="passwordOld" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Nowe hasło:</p>
                                                </td>
                                                <td>
                                                    <input type="password" class="form-control" name="password" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p style="color:black;">Powtórz hasło:</p>
                                                </td>
                                                <td>
                                                    <input type="password" class="form-control" name="password_confirmation" required>
                                                </td>
                                            </tr>
                                        </table>
                                        <input type="submit" value="Zatwierdź" class="btn btn-large btn-primary" style="float:right;">
                                        </form>
                                    </div>
                    </div>
                </div>
            </div>
        </div><!--/span-->
    </div>
@endsection
@section('dashboard_tab')
    <li>
@endsection