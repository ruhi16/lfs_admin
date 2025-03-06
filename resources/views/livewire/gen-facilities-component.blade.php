<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    {{-- <h1 class="mb-3">School Facilities </h1> --}}
                    <h1 class="mb-3">{{ $section->title ?? 'School Facilities' }}</h1>
                    <p>{{ $section->description ?? '' }}</p>
                </div>
                <div class="row g-4">
                    @foreach($section_entities as $section_entity)
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-item">
                            <div class="facility-icon bg-{{$section_entity->img_ref_2 ?? ''}}">
                                <span class="bg-{{$section_entity->img_ref_2 ?? ''}}"></span>
                                <i class="{{ $section_entity->img_ref_1 ?? ''}} text-{{$section_entity->img_ref_2 ?? ''}}"></i>
                                <span class="bg-{{$section_entity->img_ref_2 ?? ''}}"></span>
                            </div>
                            <div class="facility-text bg-{{$section_entity->img_ref_2 ?? ''}}">
                                <h3 class="text-{{$section_entity->img_ref_2 ?? ''}} mb-3">{{ $section_entity->title ?? '' }}</h3>
                                {{-- <p class="mb-0">Ensure safe and supportive transportation for all students</p> --}}
                                <p class="mb-0">{{ $section_entity->details ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{--
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="facility-item">
                            <div class="facility-icon bg-success">
                                <span class="bg-success"></span>
                                <i class="fa fa-futbol fa-3x text-success"></i>
                                <span class="bg-success"></span>
                            </div>
                            <div class="facility-text bg-success">
                                <h3 class="text-success mb-3">Playground</h3>
                                <p class="mb-0">Playground is a place where children can explore, learn, and have fun in presence of teacher</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="facility-item">
                            <div class="facility-icon bg-warning">
                                <span class="bg-warning"></span>
                                <i class="fa fa-home fa-3x text-warning"></i>
                                <span class="bg-warning"></span>
                            </div>
                            <div class="facility-text bg-warning">
                                <h3 class="text-warning mb-3">Healthy Canteen</h3>
                                <p class="mb-0">A healthy canteen is a place where students can eat healthy and nutritious food</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="facility-item">
                            <div class="facility-icon bg-info">
                                <span class="bg-info"></span>
                                <i class="fa fa-chalkboard-teacher fa-3x text-info"></i>
                                <span class="bg-info"></span>
                            </div>
                            <div class="facility-text bg-info">
                                <h3 class="text-info mb-3">Positive Learning</h3>
                                <p class="mb-0">A positive learning environment is a place where students can learn and grow in a supportive and empowering environment</p>
                            </div>
                        </div>
                    </div>
                --}}
                </div>
            </div>
        </div>
