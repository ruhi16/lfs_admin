<div>
    <!-- Notice Board Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">School Notice Board Component</h1>
                <p>Please check our notice board, to get the latest updates.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">


                @foreach($notices as $notice)
                    <div class="testimonial-item bg-light rounded p-5 space-y-2">
                        <h3 class="mb-1">Admission Notice {{ $notice->id }}, </h3><span>Date of publication: {{ $notice->dop }} to {{ $notice->doe }}</span>
                        <p class="fs-5">{{ $notice->desc }}</p>
                        
                        <p><a href="{{ Storage::url($notice->fileaddr) }}" class="fs-5" download>Download <i class="fa fa-download" aria-hidden="true"></i></a></p>
                        
                        <div class="d-flex align-items-between  bg-white me-n5" style="border-radius: 50px 0 0 50px;">                            
                            <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a>
                        </div>                        
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!-- Notice Board End -->
</div>
