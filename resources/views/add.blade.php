@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New hotel
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                            <!-- New hotel Form -->
                    <form action="/hotel/save" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                                <!-- hotel Name -->
                        <div class="form-group">
                            <label for="hotel-title" class="col-sm-3 control-label">Title</label>

                            <div class="col-sm-6">
                                <input type="text" name="title" id="hotel-title" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="hotel-description" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="hotel-description" class="form-control"">
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="hotel-price" class="col-sm-3 control-label">Price</label>

                            <div class="col-sm-6">
                                <input type="number" name="price" id="hotel-price" class="form-control">
                            </div>
                        </div>

                        <!--  Add images -->
                        <div class="form-group">
                            <label for="hotel-images" class="col-sm-3 control-label">Images</label>
                            <!-- Small modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal">Add images
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog ">
                                    <div class="modal-content" style="background-color: #31708f" >
                                                <button class="btn btn-primary add_images col-lg-12" type="button">Add img url</button>
                                                <input class="form-control"  type="text" name="preview[]"/>
                                    </div>
                                </div>
                            </div>
                        {{--End Modal--}}

                        </div>

                        <!-- Add hotel Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add hotel
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
    </div>
@endsection
