@extends('layouts.app')
@section('title', 'Countries')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Country list</div>
                <div class="card-body">
                    @include('msg.main')
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ISO</th>
                                <th scope="col">Country name</th>                                
                            </tr>
                        </thead>
                        @forelse($countries as $country)
                        <tr>
                            <td>{{$country->id}}</td>
                            <td>{{$country->iso}}</td>
                            <td>{{$country->name}}</td>                            
                            <td>
                                <a class="btn btn-success btn-sm" href="{{route('countries-edit', $country->id)}}">Edit</a>
                            </td>
                            <td>
                                <form class="delete" action="{{route('countries-delete', $country->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-warning btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>

                        @empty
                        <li>No countries...</li>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
