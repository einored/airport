@extends('layouts.app')
@section('title', 'Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Create country</div>

                <div class="card-body">
                    @include('msg.main')
                    <ul>
                        <form action="{{route('countries-store')}}" method="post" enctype="multipart/form-data">                           
                            <li>ISO</li>
                            <input type="text" class="form-control" name="create_country_iso" />
                            <li>Country name</li>
                            <input type="text" class="form-control" name="create_country_name" />
                            @csrf
                            @method('post')
                            <button type="submit" class="button-top-margin btn btn-success btn-sm">Create</button>
                        </form>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
