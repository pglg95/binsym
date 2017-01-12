
<label id="modalId" data-toggle="modal" data-target="#myModal" style="color: black;cursor:pointer;text-decoration: underline;font-size: smaller">Zapomniałeś hasła?</label>

<!-- Modal -->

<div class="modal fade" id="myModal" role="dialog">
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content" style="border-radius: 0">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2>Resetuj hasło</h2>
            </div>
            <div class="modal-body">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('userEmail') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="userEmail" value="{{ old('userEmail') }}" required>

                                @if ($errors->has('userEmail'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('userEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn-block">
            </div>
        </div>
    </div>
    </form>
</div>

