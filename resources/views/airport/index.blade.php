@extends('layouts.app')
@section('title', 'Airports')

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
                                <th scope="col">Location</th>
                                <th scope="col">Airline(-s)</th>
                                <th scope="col">Edit</th>  
                                <th scope="col">Delete</th>                                
                            </tr>
                        </thead>
                        @forelse($airports as $airport)
                        <tr>
                            <td>{{$airport->id}}</td>
                            <td>{{$airport->name}}</td>
                            <td>{{$airport->country->name}}</td>  
                            <td>{{$airport->location}}</td>
                            <td>{{$airport->airline->name}}</td>                          
                            <td>
                                <a class="btn btn-success btn-sm" href="{{route('airports-edit', $airport->id)}}">Edit</a>
                            </td>
                            <td>
                                <form class="delete" action="{{route('airports-delete', $airport->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-warning btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>

                        @empty
                        <li>No airports...</li>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
