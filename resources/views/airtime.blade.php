@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Airtime TopUp <small>(Only registered number can be recharged)</small></div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{url('/process_bill')}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                                <label for="mobile" class="col-md-4 control-label">Mobile Number</label>

                                <div class="col-md-6">
                                    <input id="mobile" type="text" class="form-control" name="mobile" value="{{ $post->phone }}" required autofocus>

                                    @if ($errors->has('mobile'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('sp') ? ' has-error' : '' }}">
                                <label for="sp" class="col-md-4 control-label">Service Provider</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="sel1">
                                        <option>AIRTEL</option>
                                        <option>GLO</option>
                                        <option>MTN</option>

                                    </select>
                                </div>

                            </div>

                            <div class="form-group{{ $errors->has('bills') ? ' has-error' : '' }}">
                                <label for="bills" class="col-md-4 control-label">Bills</label>

                                <div class="col-md-6">
                                    <input id="bills" type="text" class="form-control" name="bills" value="Airtime TopUp" disabled>

                                    @if ($errors->has('bills'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bills') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                <label for="amount" class="col-md-4 control-label">Amount</label>

                                <div class="col-md-6">
                                    <input id="amount" type="number" class="form-control" name="amount" value="3000" required>

                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Process
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
