@extends('layouts.app')

@section('content')
<div class="ui container">
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <div class="content">
        Add new Bookmark
      </div>
    </h2>
    <form class="ui large form" action="{{ route('bookmarks.post') }}" method="POST">
      {!! csrf_field() !!}
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="title" placeholder="Title">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="url" name="url" placeholder="URL">
          </div>
        </div>
        <button class="ui fluid large teal submit button">Create</button>
      </div>

      <div class="ui error message"></div>

    </form>
	

    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
          <div class="ui negative message">{{ $error }}</div>
      @endforeach
    @endif
  </div>
</div>
</div>
@endsection