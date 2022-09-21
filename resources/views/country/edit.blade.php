@extends('layouts.app')
@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit country</div>

                <div class="card-body">
                    @include('msg.main')
                    <ul>
                        <form action="{{route('countries-edit', $country)}}" method="post" enctype="multipart/form-data">         
                            <li>ISO</li>
                            <input type="text" class="form-control" name="country_iso" value="{{old('country_iso', $country->iso)}}" />              
                            <li>Country name</li>
                            <input type="text" class="form-control" name="country_name" value="{{old('country_name', $country->name)}}" />                            
                            @csrf
                            @method('put')
                            <button type="submit" class="button-top-margin btn btn-success btn-sm">Edit</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
