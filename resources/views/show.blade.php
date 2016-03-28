@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')



            <!-- Current hotels -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current hotels
                </div>

                <div class="panel-body">
                    <table class="table table-striped hotel-table">
                        <thead>
                        <th>hotel</th>
                        <th>&nbsp;</th>
                        </thead>
                        <tbody>
                        @foreach ($hotels as $hotel)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $hotel->title }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $hotel->description }}</div>
                                </td>
                                <td class="table-text">
                                    <div>
                                        @foreach($images as $image)
                                            <img class="img-thumbnail" width=400 src="{{$image}}">
                                        @endforeach
                                    </div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $hotel->price }}</div>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection
