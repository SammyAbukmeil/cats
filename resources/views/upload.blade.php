@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post your cats.</div>
                <div class="card-body">

                    @if(count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if($message = Session::get('success'))
                        {{ $message }}
                        <img src="/images/{{ Session::get('path') }}" width="300" />
                    @endif

                    <form method="post" enctype="multipart/form-data" action="/uploadfile">
                        {{ csrf_field() }}

                        Select a file for upload
                        <br>
                        <input type="file" name="select_file">
                        <br>
                        <input type="submit" name="upload" class="btn btn-success" value="upload">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection
