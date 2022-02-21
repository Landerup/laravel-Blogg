@extends('layouts.app')

@section('content')

<div class="container">

    <form action="" method="POST">

    <div class="form-group">

        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Content</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
    </div>

    <div>
        <input type="submit" class="btn btn-danger">
    </div>

    </div>

    </form>

</div>

@endsection