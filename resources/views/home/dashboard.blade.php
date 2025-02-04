@extends('layouts.app')

@section('title', 'Main Page')

@section('left-container')
<div class="container-box">Left Container</div>
@endsection

@section('middle-container')
<div class="d-grid gap-2 m-2">
  <a href="{{ route('user.listingForm', ['user' => $user]) }}">
    <button class="btn btn-primary" type="button">Post</button>
  </a>
</div>
<div class="container-box d-flex flex-wrap justify-content-start align-items-start">
  @if ($listings->count() >= 1)
  <div class="row w-100">
    @foreach($listings as $listing)
    <div class="col-md-4 mb-2 border">
      <x-listing-card 
        :item="$listing->item" 
        :price="$listing->price" 
        :qty="$listing->qty" 
        :image="$listing->image" 
        :description="$listing->description"
      />
    </div>
    @endforeach
  @endif
</div>
@endsection
