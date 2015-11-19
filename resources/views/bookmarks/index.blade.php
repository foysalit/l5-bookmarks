@extends('layouts.app')

@section('content')
  <div class="ui container">
    <div class="ui header">
      <h1>
        Bookmarks
        <a href="{{route('bookmarks.create')}}" class="ui right floated teal button">
          Add New
        </a>
      </h1>
    </div>
  
    
    <div class="ui cards">
      @foreach($bookmarks as $bookmark)
      <div class="ui card">
        <div class="image">
          <img src="http://placeimg.com/640/360/tech">
        </div>
        <div class="content">
          <a class="header">{{ $bookmark->title }}</a>
          <div class="meta">
            <span class="date">Added on {{ $bookmark->created_at }}</span>
          </div>
          <div class="description">
            {{ $bookmark->url }}
          </div>
        </div>
        <div class="extra content">
          <a>
            <i class="user icon"></i>
            22 Friends
          </a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

@endsection