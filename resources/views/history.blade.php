@extends('master')
@section('content')
            <div class="row-fluid sortable">
                <div class="box span12">
                    <div class="box-header" data-original-title>
                        <h2><i class="halflings-icon white user"></i><span class="break"></span>Historia</h2>
                    </div>
                    <div class="box-content">
                        <div style="overflow-x:auto;">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                                <thead>
                                <tr>
                                    <th>Kod kursu</th>
                                    <th>Inwestycja</th>
                                    <th>Data złożenia</th>
                                    <th>Data zakończenia</th>
                                    <th>Kurs początkowy</th>
                                    <th>Kurs końcowy</th>
                                    <th>Spekulacja</th>
                                    <th>Bilans</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($binaryOptions as $boption)
                                    <tr>
                                        <td class="center">{{$binaryOptionsRatingCodes[$loop->index]}}</td>
                                        <td class="center">{{$boption->value}}</td>
                                        <td class="center">{{$boption->created_at}}</td>
                                        <td class="center">{{explode(" ",$boption->finish_date)[0]}} Notowanie:{{explode(":",explode(" ",$boption->finish_date)[1])[0]}}</td>
                                        <td class="center">{{$boption->start_rate}}</td>
                                        <td class="center">{{$boption->finish_rate}}</td>
                                        <td class="center">
                                            @if($boption->speculation == 0)
                                                <i class="fa fa-thumbs-o-down fa-2x" aria-hidden="true"></i>
                                            @else
                                                <i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($boption->revenue < 0)
                                                <span style="color: #942a25;font-weight: 700">{{$boption->revenue}}</span>
                                            @else
                                                <span style="color: #1E7145;font-weight: 700">{{$boption->revenue}}</span>
                                            @endif
                                        </td>
                                        <td class="center">
                                            @if($boption->state == 1)
                                                <span class="label label-success">AKTYWNA</span>
                                            @else
                                                <span class="label">ZAKOŃCZONA</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
@endsection
@section('history_tab')
    <li class="active">
@endsection
@section('dashboard_tab')
    <li>
@endsection