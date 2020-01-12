@extends('template')


@section('content')

    <form action="" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" cols="30" rows="10">
        </textarea>
        </div>

        <button class="btn btn-primary">Send Message</button>

    </form>

@stop