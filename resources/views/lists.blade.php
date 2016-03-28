@extends('layouts.app')

@section('content')
    <!-- Current hotels -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Current hotels
        </div>

        <div class="panel-body">
            <table class="table table-striped hotel-table">
                <thead>
                <th>Title</th>
                <th>Price</th>

                </thead>
                <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td class="table-text">
                            <div>{{ $hotel->title }}</div>
                        </td>

                        <td class="table-text">
                            <div>{{ $hotel->price }}</div>
                        </td>


                        <!-- hotel Delete Button -->
                        <td>
                            <form action="/hotel/{{ $hotel->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>
                        </td>
                        <!-- hotel details button -->
                        <td>
                            <form action="/hotel/show/{{ $hotel->id }}" method="GET">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-btn fa-info"></i>Details
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection