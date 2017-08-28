@extends('layouts.app')
<script src="{{ asset('js/app.js') }}"></script>

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Update Items</h1>
            <hr>

            <form action="/update" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="id">ID:</label>
                    <input class="form-control" type="number" id="id" name="id" value={{ $post->id }} required>
                </div>

                <div class="form-group">
                    <label for="food_name">Food Name:</label>
                    <input class="form-control" type="text" id="food_name" name="name" value={{ $post->name }} required>
                </div>

                <div class="form-group">
                    <label for="food_description">Food Description:</label>
                    <input class="form-control" type="text" id="food_description" name="description" value={{ $post->description }} required>
                </div>

                <div class="form-group">
                    <label for="food_price">Food Price:</label>
                    <input class="form-control" type="number" id="food_price" name="price" value={{ $post->price }} required>
                </div>

                <div class="form-group">
                    <input class="form-control btn-success" type="submit" value="Update Item" id="update">
                </div>
            </form>

        </div>
    </div>

@endsection