@extends('layouts.app')
@section('content')
<div class="container">

<div class="row justify-content-center mt-3">
    <div class="col-md-8">
      <form action="/p/{{ $post->id}}" enctype=:multipart/form-data method="post">
        @csrf
        @method('PATCH')
        <input id="text" type="text" class="form-control form-control-sm mb-3 text-right @error('title') is-invalid @enderror" name="title" placeholder="عنوان خاطره" style="font-family:B Mehr; font-weight:bold;"  value="{{ old('title') ?? $post->title }}"  autocomplete="title" autofocus>
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
        
        <input id="text"   type="text" class="form-control input text-right @error('text') is-invalid @enderror" style="height:300px;" name="text" placeholder="متن خاطره" style="font-family:B Mehr;font-weight:bold;" value="{{ old('text') ?? $post->text }}"  autocomplete="text" autofocus>
        @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <div class="row justify-content-center mt-3">
            <button class="btn btn-primary mr-3" style="font-family:B Mehr; font-weight:bold;">ثبت</button>  
        </div>
      </form>
      <!-- <div>
      <button class="btn btn-secondary" style="font-family:B Mehr; font-weight:bold;">بازگشت</button>
      </div> -->
    </div>
</div>

</div>
@endsection