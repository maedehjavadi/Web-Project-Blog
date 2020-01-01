@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 pt-3">
            <div class="card">
                <div class="card-header border border-light bg-primary" style="font-size: 22px; font-weight:bold; font-family: B Tabassom; text-align:center;">لیست خاطرات من</div>

                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                        <button class="btn btn-outline-primary mt-3 " style="font-weight:bold; font-family: B Mehr; text-align:center;"><a href="/p/create">ثبت خاطره جدید</a></button>
                        </div>
                        
                        <div class="row pt-4">
                        @foreach ($user->posts as $post)
                            <div class="col-6 pt-4">
                                <div class="card ">
                                    <div class="card-header bg-light border border-light" style="font-weight:bold; font-family: B Mehr;">
                                        <div class="clearfix">
                                            <span class="float-right">{{ $post->title }}</span>
                                            <span class="float-left">تاریخ</span>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 px-0">
                                        <div class="container-fluid pagination pr-0 d-flex flex-row-reverse ">
                                            <div class="col-4 page-item px-0 text-center" style="font-weight:bold; font-family: B Mehr;"><a class="page-link bg-success text-light" href="#">نمایش</a></div>
                                            <div class="col-4 page-item px-0 text-center" style="font-weight:bold; font-family: B Mehr;"><a class="page-link bg-secondary text-light" href="#">ویرایش</a></div>
                                            <div class="col-4 page-item px-0 text-center" style="font-weight:bold; font-family: B Mehr;"><a class="page-link bg-danger text-light" href="#">حذف</a></div>
                                        </div>  
                                    </div>
                                </div>
                               
                            </div>
                            @endforeach 
                            </div>
                            <!-- <div class="col-6 p-2">
                            <div class="card">
                                    
                                    <div class="card-header bg-light border border-secondary" style="font-weight:bold; font-family: B Mehr;">
                                        <div class="clearfix">
                                            <span class="float-right">{{ __('عنوان خاطره') }}</span>
                                            <span class="float-left">{{ __('تاریخ') }}</span>
                                        </div>
                                    </div>
                                    <div class="card-body py-0 px-0">
                                    <div class="container-fluid pagination pr-0 d-flex flex-row-reverse ">
                                        <div class="col-4  px-0 text-center" style="font-weight:bold; font-family: B Mehr;"><a class="page-link bg-success text-light" href="#">نمایش</a></div>
                                        <div class="col-4  px-0 text-center" style="font-weight:bold; font-family: B Mehr;"><a class="page-link bg-secondary text-light" href="#">ویرایش</a></div>
                                        <div class="col-4  px-0 text-center" style="font-weight:bold; font-family: B Mehr;"><a class="page-link bg-danger text-light" href="#">حذف</a></div>
                                    </div>
                                       
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p style="font-family:B Mehr; text-align: end;">
                    <!-- .کاربر عزیز شما هیچ خاطره ای ثبت نکرده اید  -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
