@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}

                    <div class="upload-link-wrapper btn btn-primary">
                        <a class="upload-link" href="/uploadfile">Upload a cat! :)</a>
                    </div>

                    <div class="main-feed">
                        <h3>Cat Wall</h3>

                        <card card_text="Test"></card>

                        @foreach ($uploads as $upload)
                            <div class="img-wrapper">
                                <img src="{{ $upload->url }}">
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
