@extends ('layouts.app')

@section ('content')
<div class="container">
    <div class="row justify-content-center mt-3">
         
        <div class="col-md-8">

           <div class="text-center mb-5 border-bottom border-danger" style="font-weight:bold; font-family: B Mehr;">
                <p>
                    {{$post->title }}
                </p>
           </div> 
            <div class="text-right" style="font-weight:bold; font-family: B Tabassom; height:325px;">
                <p>
                    {{$post->text }}
                </p>
            </div>

            <div>
                <button class="btn btn-secondary" style="font-family:B Mehr; font-weight:bold;"><a href="#">بازگشت</a></button>
            </div>
        </div>
    </div>
</div>
@endsection