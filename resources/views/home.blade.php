@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>

                    <h3>Uploads</h3>

                    @foreach ($uploads as $upload)
                        <img src="{{ $upload->url }}">
                    @endforeach

                    <br>

                    <a href="/uploadfile">Upload a file</a>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
