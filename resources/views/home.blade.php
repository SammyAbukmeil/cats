@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cat Wall</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}

                    {{-- <br> --}}

                    {{-- <h3>Uploads</h3> --}}

                    <div class="upload-link-wrapper">
                        <a class="upload-link btn btn-primary" href="/uploadfile">Upload a cat!</a>
                    </div>

                    @foreach ($uploads as $upload)
                        <div class="img-wrapper">
                            <img src="{{ $upload->url }}">
                            <div class="image-info p-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        Uploaded by: Sammy
                                    </div>
                                    <div class="col-md-6">
                                        Vote:
                                        {{-- <div class="btn-wrapper btn btn-primary"> --}}
                                            <a class="btn btn-primary" href="">Up</a>
                                        {{-- </div> --}}
                                        {{-- <div class="btn-wrapper btn btn-primary"> --}}
                                            <a class="btn btn-primary" href="">Down</a>
                                        {{-- </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
