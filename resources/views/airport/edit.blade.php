@extends('layouts.app')
@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit airport</div>

                <div class="card-body">
                    @include('msg.main')
                    <ul>
                        <form action="{{route('airports-edit', $airport)}}" method="post" enctype="multipart/form-data">         
                            <li>Airport name</li>
                            <input type="text" class="form-control" name="airport_name" value="{{old('airport_name', $airport->name)}}" />              
                            <li>Country</li>
                            <select class="form-control" name="airport_country_id" required focus>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}" {{old('airport_country_id', $airport->country_id)==$country->id?'selected':''}}>{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <li>Airport location</li>
                            <input type="text" class="form-control" name="airport_location" value="{{old('airport_location', $airport->location)}}" />              
                            <li>Airline(-s)</li>
                            <select class="form-control" name="airport_airline_id" required focus>
                                @foreach($airlines as $airline)
                                <option value="{{$airline->id}}" {{old('airport_airline_id', $airport->airline_id)==$airline->id?'selected':''}}>{{ $airline->name }}</option>
                                @endforeach
                            </select>
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
