
        <div class="container-fluid p-0 mb-5">
            <div class="owl-carousel header-carousel position-relative">
                {{-- {{ json_encode($uiscreendesigns->where('ui_section_id', 1) )}} --}}
                @php 
                    $section = $uiscreendesigns->where('ui_section_id', 1);  
                    
                    function highlightEnglishMedium($text) {
                        return str_replace('English Medium', '<span style="color: #008CBA;">English Medium</span>', $text); // or $text;
                    }
                @endphp {{-- The Carausel  --}}
                {{-- {{ $section->first()->section->name }} --}}
                @foreach($section->unique('ui_entity_id') as $entity)
                    {{-- xx{{ $entity->id }} --}}
                    @php  $myentity = $uiscreendesigns->where('ui_entity_id', $entity->ui_entity_id); @endphp

                    {{-- xx================== {{ json_encode($myentity->where('ui_section_id', 1)->where('ui_entity_id', $entity->ui_entity_id)    ) }} =====================yy --}}
                
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ $entity->img_ref_1}}" alt="">
                        <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                            <div class="container">
                                <div class="row justify-content-start">
                                    <div class="col-10 col-lg-8">
                                        <h1 class="display-2 text-white animated slideInDown mb-4"><span class="text-primary me-3 drop-shadow-[0_35px_35px_rgba(0,0,0,0.25)]">{{ $entity->title }}</span><br/>
                                            {!! highlightEnglishMedium($entity->sub_title) !!}
                                        </h1>
                                        <p class="fs-5 fw-medium text-white mb-4 pb-2">{{ $entity->details }}</p>
                                        {{-- <a href="" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">Learn More</a> --}}
                                        <!-- Add this anchor or button where you want the trigger to appear -->
                                        <a href="#" class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft" data-bs-toggle="modal" data-bs-target="#urgentNoticeModal">Learn More</a>
                                        <a href="" class="btn btn-dark rounded-pill py-sm-3 px-sm-5 animated slideInRight">Our Classes</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>