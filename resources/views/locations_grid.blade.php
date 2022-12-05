@foreach ($communities->chunk(3)->all() as $chunk)
    <div class="row row-cols-1 row-cols-lg-3 g-3 mb-3">

        @foreach ($chunk as $community)
            <div class="col">
                <div class="card shadow border-light">
                    <img src="{{ $community->featured_image_url }}"
                         class="card-img-top gallery_img card-border-radius-5" alt="Featured Image">
                    <div class="card-body">
                        <h4 class="card-title fw-semibold border-bottom">{{ $community->name }}</h4>


                        <div class="row mt-3">
                                <div class="col-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-tag" viewBox="0 0 16 16">
                                        <path
                                            d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                        <path
                                            d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                    </svg>
                                    <span class="fw-semibold">Starting at ${{ $community->price_min }}</span>
                                </div>
                                <div class="col-6">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-house-door" viewBox="0 0 16 16">
                                        <path
                                            d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                                    </svg>
                                    <span class="fw-semibold">From {{ $community->sqft_min }} sq ft</span>
                                </div>

                            <div class="col-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-megaphone" viewBox="0 0 16 16">
                                    <path
                                        d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
                                </svg>
                                <span class="fw-semibold">{{ $community->marketing_status }}</span>
                            </div>
                            <div class="col-6">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" width="16"
                                     height="16" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"/>
                                </svg>

                                <span
                                    class="fw-semibold">{{ $community->location->city }}, {{ $community->location->state->code }}</span>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <p class="card-text text-muted">{{ $community->description }}</p>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer d-flex justify-content-between border-0">
                        <div>
                            <a href="#" class="btn btn-primary">More Information</a>
                        </div>
                        <div>
                            <a href="#" class="float-right btn btn-outline-primary">Make an Offer</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endforeach


