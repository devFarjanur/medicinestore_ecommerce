<!--category section start-->
<section class="category-section pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-title text-center">
                    <h2 class="mb-2">Browse All Categories</h2>
                    <p class="mb-0">Sticky niche markets via goal-oriented networks Completely recaptiualize</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center g-4 mt-4">
            @foreach ($categories as $category)
                <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">

                    <div
                        class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden">
                        <div
                            class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                            <img src="{{ asset('upload/admin_images/' . $category->photo) }}" alt="Category Image"
                                class="img-fluid">
                        </div>
                        <a href="#" class="text-dark fs-sm fw-bold d-block mt-3">{{ $category->category_name }}</a>
                        <span
                            class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">{{ $category->products->count() }}</span>
                        <a href="#" class="explore-btn position-absolute"><svg width="12" height="17" fill="white"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
                            </svg>

                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section> <!--category section end-->