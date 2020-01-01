@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
         
        <div class="col-4">
            
            <p>
            {{$post->title }}
            </p>
            <p>
            {{$post->text }}
            </p>
        </div>
    </div>
</div>
@endsection