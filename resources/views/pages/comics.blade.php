@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')
  <div class="container">
    <h4 class="page_desc text-uppercase text-light fw-bold">current series</h4>
  
    <div class="row">
      @foreach ($comics as $comic)

        <div class="col-2">
          <div class="cover">
            <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid">
          </div>
          <p class="text-light text-uppercase">{{ $comic['series']}}</p>
        </div>
          
      @endforeach

    </div>
    
    <div class="text-center">
      <span class="text-uppercase text-light bg-primary px-5 py-2 mb-3"> Load more</span>
    </div>
  </div>
@endSection