@extends('layouts.master')

@section('content')

  <div class="col-sm-8 blog-main">

  <h1>Publish A Post</h1>

  <form method="POST" action="/posts">

    {{csrf_field()}}

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title">
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea class="form-control" name="body" rows="8" cols="80" id="body" placeholder="Place your text here"></textarea>
  </div>

<div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
    </div>
</form>

  @include('layouts.errors')


</div>
@endsection
