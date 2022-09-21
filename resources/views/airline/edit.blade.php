@extends('layouts.app')
@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Edit airline</div>

                <div class="card-body">
                    @include('msg.main')
                    <ul>
                        <form action="{{route('airlines-edit', $airline)}}" method="post" enctype="multipart/form-data">         
                            <li>Airline name</li>
                            <input type="text" class="form-control" name="airline_name" value="{{old('airline_name', $airline->name)}}" />              
                            <li>Country</li>
                            <select class="form-control" name="airline_country_id" required focus>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}" {{old('airline_country_id', $airline->country_id)==$country->id?'selected':''}}>{{ $country->name }}</option>
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
