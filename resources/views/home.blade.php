@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! {{ Auth::user()->name }}
                </div>

                <div class="content">
                    <div class="links">
                        <a href="home">Dashboard</a>
                        <a href="/airtime">Airtime Merchant</a>
                        <a href="/home">Other Bills</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
