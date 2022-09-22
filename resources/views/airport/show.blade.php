@extends('layouts.app')
@section('title', 'Airports')

<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
    var map;

    function initialize() {
        latitude = <?php echo $airport->latitude ?>;
        longitude = <?php echo $airport->longitude ?>;
        latlng = new google.maps.LatLng(latitude, longitude);

        var mapOpt = {
            center: latlng
            , zoom: 14
            , zoomControl: false
            , scaleControl: true
            , mapTypeId: google.maps.MapTypeId.HYBRID
        , };

        map = new google.maps.Map(document.getElementById("googleMap"), mapOpt);

        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(latitude, longitude)
            , draggable: false
            , map: map
        })
        
    }
    google.maps.event.addDomListener(window, 'load', initialize);

</script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Airport list</div>
                <div class="card-body">
                    @include('msg.main')
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Airport name</th>
                                <th scope="col">Country</th>
                                <th scope="col">Airline(-s)</th>
                                <th scope="col">Edit</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>{{$airport->id}}</td>
                            <td>{{$airport->name}}</td>
                            <td>{{$airport->country->name}}</td>
                            <td>{{$airport->airline->name}}</td>
                            <td>
                                <a class="btn btn-success btn-sm" href="{{route('airports-edit', $airport->id)}}">Edit</a>
                            </td>
                        </tr>
                    </table>
                    <div id="googleMap" style="width:100%;height:350px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
