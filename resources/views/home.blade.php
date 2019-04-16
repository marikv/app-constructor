@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    API документация (Swagger)
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/api/documentation') }}" target="_blank">{{ url('/api/documentation') }}</a>

                </div>
            </div>


            <div id="appDash">

                <div style="padding: 10px;clear: both"></div>

                <passport-clients></passport-clients>

                <div style="padding: 10px;clear: both"></div>

                <passport-authorized-clients></passport-authorized-clients>

                <div style="padding: 10px;clear: both"></div>

                <passport-personal-access-tokens></passport-personal-access-tokens>

                <div style="padding: 10px;clear: both"></div>

            </div>

        </div>

    </div>
</div>
@endsection
