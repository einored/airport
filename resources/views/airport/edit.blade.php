@extends('layouts.app')
@section('title', 'Edit')

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var map;

    function initialize() {
        latitude = <?php echo $airport->latitude ?>;
        longitude = <?php echo $airport->longitude ?>;
        latlng = new google.maps.LatLng(latitude, longitude);

        var mapOpt = {
            center: latlng
            , zoom: 5
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
                            <li>Airport latitude</li>
                            <input type="text" class="form-control" id="latitude" name="airport_latitude" value="{{old('airport_latitude', $airport->latitude)}}" /> 
                            <li>Airport longitude</li>
                            <input type="text" class="form-control"  id="longitude" name="airport_longitude" value="{{old('airport_longitude', $airport->longitude)}}" />   
                            <div id="googleMap" style="width:100%;height:350px;" onclick="setLatLon()"></div>
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
