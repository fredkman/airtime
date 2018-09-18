@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading">Information Update</div>

                    <div class="panel-body">
                        @if ($amount > ($update->acct_bal ))
                            <h2>insufficient Balance</h2>
                        @else
                        <h2> TopUp Notification! !!</h2>
                            <small>VTU</small><br>
                            <p>Your line have been credited with #{{$amount}}  from your account</p>
                        <small>your new balance is #{{$update->acct_bal-$amount}}</small>

                            {{--{{\App\Http\Controllers\ProcessController::checkBalance() }}--}}
                        @endif

                       {{--}} You are logged in! {{ Auth::user()->name }} --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
