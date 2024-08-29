<x-head />
<x-search />

        <!-- Jobs Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp text-3xl" data-wow-delay="0.1s" style="color:#005555;">Available Jobs</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            @foreach ($layout as $layouts)
                            <div class="job-item p-4 mb-4 shadow-lg">
                                <div class="row g-4">
                                    
                                    <div class="col-sm-8 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded " id="apply" src="{{asset('storage/'.$layouts->logo)}}" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3 pb-3 sm:pt-3 px-2">{{$layouts->title}}</h5>
                                            <span class="text-truncate me-6"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $layouts->location }}</span>
                                            <span class="text-truncate me-6 text-primary"><i class="far fa-clock text-primary me-2"></i>{{ $layouts->time }}</span>
                                            <span class="text-truncate me-6"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ $layouts->salary }}</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-end align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3 text-center">
                                            <a class="btn btn-light btn-square me-3" href=""><i class="fa fa-heart text-primary"></i></a>
                                            <a class="btn btn-primary" href="/layouts/{{$layouts['id']}}">Apply Now</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Created: {{ $layouts->created_at->format('d-M-Y') }}</small>
                                    </div>
                                </div>
                                
                            </div>
                           @endforeach
                            
                            <p class="py-3 px-5 text-white">{{$layout->links()}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

<x-footer />
