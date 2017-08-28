@extends('layouts.app')

    @section('content')

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>Insert New Items</h1>
                <hr>

                <form action="/store" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="food_name">Food Name:</label>
                        <input class="form-control" type="text" id="food_name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="food_description">Food Description:</label>
                        <input class="form-control" type="text" id="food_description" name="description" required>
                    </div>

                    <div class="form-group">
                        <label for="food_price">Food Price:</label>
                        <input class="form-control" type="number" id="food_price" name="price" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control btn-success" type="submit" value="Add New Item" id="add">
                    </div>
                </form>
            </div>
        </div>

    @endsection