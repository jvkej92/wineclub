@extends('layouts.app')

@section('content')
    <div class="card col-4 m-auto p-0">
        <h3 class="card-header">
            Your Plan: {{$plan->name}}
        </h3>
        <div class="card-body">
            <ul class="list-group">
                <li class="list-group-item">Cost: ${{$plan->cost}} Quarterly</li>
                <li class="list-group-item">Description: {{$plan->description}}</li>
            </ul>
        </div>            
    </div>
@endsection