@extends('layouts.app')
@section('title', 'Create')

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var map;

    function initialize() {
        latitude = 50;
        longitude = 20;
        latlng = new google.maps.LatLng(latitude, longitude);

        var mapOpt = {
            center: latlng
            , zoom: 3
            , zoomControl: true
            , scaleControl: true
            , mapTypeId: google.maps.MapTypeId.HYBRID
        , };

        map = new google.maps.Map(document.getElementById("googleMap"), mapOpt);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude)
            , draggable: false
            , animation: true
            , map: map
        })
        marker.bindTo('position', map, 'center');
    }
    google.maps.event.addDomListener(window, 'load', initialize);

    function setLatLon(){
        document.getElementById("latitude").value = map.getBounds().getNorthEast().lat();
        document.getElementById("longitude").value = map.getBounds().getNorthEast().lng();
    }

</script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Create airport</div>

                <div class="card-body">
                    @include('msg.main')
                    <ul>
                        <form action="{{route('airports-store')}}" method="post" enctype="multipart/form-data">                           
                            <li>Airport name</li>
                            <input type="text" class="form-control" name="create_airport_name" />
                            <li>Country</li>
                            <select class="form-control" name="create_airport_country_id" required focus>
                                <option value="" disabled selected>Please select country</option>
                                @foreach($countries as $country)
                                <option value="{{$country->id}}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                            <li>Airport latitude</li>
                            <input type="text" class="form-control" id="latitude" name="create_airport_latitude" />                            
                            <li>Airport longitude</li>
                            <input type="text" class="form-control" id="longitude" name="create_airport_longitude" />
                            <div id="googleMap" style="width:100%;height:350px;" onclick="setLatLon()"></div>

                            <li>Airline(-s)</li>
                            <select class="form-control" name="create_airport_airline_id" required focus>
                                <option value="" disabled selected>Please select airline</option>
                                @foreach($airlines as $airline)
                                <option value="{{$airline->id}}">{{ $airline->name }}</option>
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
