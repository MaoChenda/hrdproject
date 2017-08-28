@extends('layouts.app')
<script src="{{ asset('js/app.js') }}"></script>

@section('content')

<div class="container-fluid">

    @include('AdminPage.messageAlert')
    <div class="row">
        <div class="col-lg-3 ">

            <div class="profile-sidebar">
                <div class="user-profile">
                    <img class="img-responsive  img-circle " src="{{asset('image/profile/profile.png')}}">
                </div>

                <div class="user-name">
                    <b>{{ Auth::user()->name }}</b>
                </div>

                <div class="user-email">
                    {{ Auth::user()->email }}
                </div>
                <hr>

                <div class="user-menu">
                    <ul class="nav">
                        <li class="view">
                            <a href="/home">
                                <i class="glyphicon glyphicon-file"></i>
                                &nbsp; &nbsp; &nbsp; View Categories
                            </a>
                        </li>

                        <li class="insert">
                            <a href="/insert">
                                <i class="glyphicon glyphicon-plus"></i>
                                &nbsp; &nbsp; &nbsp; Insert New Item
                            </a>
                        </li>

                        <li class="customerOrder">
                            <a href="#">
                                <i class="glyphicon glyphicon-shopping-cart"></i>
                                &nbsp;&nbsp;&nbsp; Customer Ordered
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    &#169; Fast Food 2017
                </div>
            </div>

        </div>

        <div class="col-lg-9" style="margin-top: -30px">

            <div class="left-side">

                {{--button for add update delete--}}
                <div class="buttonChoice">
                    <div class="row">
                        <div class="col-lg-4" style="margin-top: 120px">
                            <a href="/insert">
                                <div class="btn btn-info">Insert New Item</div>
                            </a>
                        </div>

                        <div class="col-lg-8 text-right" style="margin-top: 120px">
                            <div class="input-group" style="width: 300px; float:right;">
                                <input type="text" class="form-control" placeholder="search for...">
                                <span class="input-group-btn">
                            <button type="button" class="btn btn-success">Search</button>
                        </span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                {{--table food--}}
                <div class="table-responsive" style="padding: 20px; margin-top: -40px">
                    <table class="table table-striped" >
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Create_at</th>
                            <th>Update_at</th>
                            <th>Delete</th>
                            <th>Update</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $datas)
                            <tr>
                                <td>{{ $datas -> id }}</td>
                                <td>{{ $datas -> name }}</td>
                                <td>{{ $datas -> description }}</td>
                                <td>{{ $datas -> price . "$" }}</td>
                                <td>{{ $datas -> created_at }}</td>
                                <td>{{ $datas -> updated_at }}</td>
                                <td>
                                    <button class="btn btn-sm btn-danger" type="submit" data-toggle="modal" data-target="#modalDelete-{{ $datas->id }}">Delete</button>
                                </td>

                                <td>
                                    <a href="/show/{{ $datas->id }}">
                                        <button class="btn btn-sm btn-success" type="submit">Update</button>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

    @foreach($data as $datas)

    <!-- Modal to delete item -->
        <div class="modal fade" id="modalDelete-{{ $datas-> id}}" role="dialog">
            <form method="post" action="/delete">
                {{ csrf_field() }}
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            Delete Contents
                        </div>
                        <div class="modal-body">
                            <p>Do you want to delete this item in id </p>
                            <input type="number" name="id" class="form-control" value={{ $datas->id }}>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>

                </div>
            </form>
        </div>

    @endforeach


</div>

@endsection
