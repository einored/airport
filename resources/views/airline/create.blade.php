@extends('layouts.app')
@section('title', 'Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Create airline</div>

                <div class="card-body">
                    @include('msg.main')
                    <ul>
                        <form action="{{route('airlines-store')}}" method="post" enctype="multipart/form-data">                           
                            <li>Airline name</li>
                            <input type="text" class="form-control" name="create_airline_name" />
                            <li>Country</li>
                            <select class="form-control" name="create_airline_country_id" required focus>
                                <option value="" disabled selected>Please select country</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{ $country->name }}</option>
                                @endforeach
                            </select>
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
