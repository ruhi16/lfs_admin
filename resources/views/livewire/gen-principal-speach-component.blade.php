<div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        {{-- <img class="position-absolute w-100 h-100 rounded" src="img/call-to-action.jpg"                                                   style="object-fit: cover;"> --}}
                        <img class="position-absolute w-100 h-100 rounded" src="{{ Storage::url($principal_desk->img_ref_1) }}" alt="Image Preview" style="object-fit: cover;">
                        
                        {{-- {{ $principal_desk->img_ref_1 }} 
                        {{ Storage::url($principal_desk->img_ref_1) }}
                        {{ asset('/storage/photos') }}
                        {{ asset($principal_desk->img_ref_1) }} --}}

                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 d-flex flex-column justify-content-center p-5">
                        <h1 class="mb-4">{{ $principal_desk->title }}</h1>
                        <div>
                            {!! $principal_desk->details !!}
                        </div>

                        <a class="btn btn-primary py-3 px-5" href="">Get Started Now<i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>