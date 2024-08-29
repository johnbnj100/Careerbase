<x-head />
<body>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('storage/'.$content->logo)}}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3">{{ $content->title }}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $content->location }}</span>
                        <span class="text-truncate me-3 text-primary"><i class="far fa-clock text-primary me-2"></i>{{ $content->time }}</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ $content->salary }}</span>
                    </div>
                </div>

                <div class="mb-5" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <h4 class="mb-3">Job Description</h4>
                    <p>{{ $content->description }}</p>
                    
                    <h4 class="mb-3">Responsibility</h4>
                    <p>{{ $content->qualification }}</p>
                    
                    <h4 class="mb-3">Qualification</h4>
                   <p>{{ $content->requirement }}</p>

                    <h4 class="mb-3">Website</h4>
                   <p>{{ $content->website }}</p>

                    <h4 class="mb-3">Send your CV to this Email:</h4>
                   <p>{{ $content->email }}</p>
                    
                    </div>

            </div>

            <div class="col-lg-4" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                <div class="bg-light rounded pb-5 mb-1 wow slideInUp" data-wow-delay="0.1s">
                    <h4 class="mb-4">Job Summary</h4>
                    <p><i class="fa fa-angle-right text-primary "></i>Published On: {{ $content->created_at->format('d-M-Y') }}</p>
                    <p><i class="fa fa-angle-right text-primary "></i>Job Nature: {{ $content->time }}</p>
                    <p><i class="fa fa-angle-right text-primary "></i>Salary: {{ $content->salary }}</p>
                    <p><i class="fa fa-angle-right text-primary "></i>Location: {{ $content->location }}</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary "></i>Time: {{ $content->created_at->format('h:i') }}</p>
                </div>
                <div class="bg-light rounded wow slideInUp" data-wow-delay="0.1s" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                    <h4 class="mb-2">Company Detail</h4>
                    <p class="m-0">{{ $content['company-detail'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- Job Detail End -->
    <x-footer />