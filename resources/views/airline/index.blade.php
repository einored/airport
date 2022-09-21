@extends('layouts.app')
@section('title', 'Airlines')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Airline list</div>
                <div class="card-body">
                    @include('msg.main')
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ISO</th>
                                <th scope="col">Airline name</th>  
                                <th scope="col">Country</th>
                                <th scope="col">Delete</th>                                
                            </tr>
                        </thead>
                        @forelse($airlines as $airline)
                        <tr>
                            <td>{{$airline->id}}</td>
                            <td>{{$airline->name}}</td>
                            <td>{{$airline->country->name}}</td>                            
                            <td>
                                <a class="btn btn-success btn-sm" href="{{route('airlines-edit', $airline->id)}}">Edit</a>
                            </td>
                            <td>
                                <form class="delete" action="{{route('airlines-delete', $airline->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-warning btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>

                        @empty
                        <li>No airlines...</li>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
