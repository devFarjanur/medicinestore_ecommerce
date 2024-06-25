<!--product details start-->
<section class="product-details-area ptb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-9">
                <div class="product-details">
                    <div class="gstore-product-quick-view bg-white rounded-3 py-6 px-4">
                        <div class="row align-items-center g-4">
                            <div class="col-xl-6 align-self-end">
                                <div class="quickview-double-slider">
                                    <div class="quickview-product-slider swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide text-center">
                                                <img src="{{ asset('upload/admin_images/' . $product->photo) }}"
                                                    alt="{{ $product->name }}" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="product-info">
                                    <h4 class="mt-1 mb-3">{{ $product->name }}</h4>
                                    <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                        <ul class="d-flex align-items-center me-2">
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                        <span class="flex-shrink-0">(5.2k Reviews)</span>
                                    </div>
                                    <div class="pricing mt-2">
                                        <span class="fw-bold fs-xs text-danger">TK {{ $product->price }}</span>
                                        <span class="fw-bold fs-xs deleted ms-1">TK {{ $product->price + 100 }}</span>
                                    </div>
                                    <div class="widget-title d-flex mt-4">
                                        <h6 class="mb-1 flex-shrink-0">Description</h6>
                                        <span
                                            class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                                    </div>
                                    <ul class="d-flex flex-column gap-2">
                                        <li><span class="me-2 text-primary"><i
                                                    class="fa-solid fa-circle-check"></i></span>Natural ingredients</li>
                                        <li><span class="me-2 text-primary"><i
                                                    class="fa-solid fa-circle-check"></i></span>Tastes better with milk
                                        </li>
                                        <li><span class="me-2 text-primary"><i
                                                    class="fa-solid fa-circle-check"></i></span>Vitamins B2, B3, B5 and
                                            B6</li>
                                        <li><span class="me-2 text-primary"><i
                                                    class="fa-solid fa-circle-check"></i></span>Refrigerate for
                                            freshness</li>
                                    </ul>
                                    <h6 class="fs-md mb-2 mt-3">Weight:</h6>
                                    <div class="d-flex align-items-center gap-4 flex-wrap">
                                        <div class="product-qty d-flex align-items-center">
                                            <button class="decrease">-</button>
                                            <input type="text" value="1" class="quantity">
                                            <button class="increase">+</button>
                                        </div>
                                        <a href="{{ route('customer.cart') }}" data-id="{{ $product->id }}"
                                            data-name="{{ $product->name }}" data-price="{{ $product->price }}"
                                            data-photo="{{ asset('upload/admin_images/' . $product->photo) }}"
                                            class="btn btn-secondary btn-md add-to-cart">
                                            <span class="me-2"><i class="fa-solid fa-bag-shopping"></i></span>Add to
                                            Cart
                                        </a>

                                    </div>
                                    <div class="tt-category-tag mt-4">
                                        <a href="#" class="text-muted fs-xxs">Vegetable</a>
                                        <a href="#" class="text-muted fs-xxs">Healthy</a>
                                        <a href="#" class="text-muted fs-xxs">Organic</a>
                                        <a href="#" class="text-muted fs-xxs">Vegetable</a>
                                        <a href="#" class="text-muted fs-xxs">Healthy</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-info-tab bg-white rounded-2 overflow-hidden pt-6 mt-4">
                        <ul class="nav nav-tabs border-bottom justify-content-center gap-5 pt-info-tab-nav">
                            <li><a href="#description" class="active" data-bs-toggle="tab">Description</a></li>
                            <li><a href="#info" data-bs-toggle="tab">Additional Information</a></li>
                            <li><a href="#review" data-bs-toggle="tab">Reviews(02)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active px-4 py-5" id="description">
                                <h6 class="mb-2">Details:</h6>
                                <p class="mb-4">Italy's best, reimagined. At a rustic Osteria, we were inspired to make
                                    this recipe when we noticed how mellow a clove of garlic becomes when it simmers all
                                    day. We blended the mellow cloves of garlic and sweet basil with plum tomatoes from
                                    the San Marzano region of Italy and the finest extra virgin olive oil for a uniquely
                                    bright, fresh basil flavor.</p>
                                <ul class="list-style-type-disc mb-4">
                                    <li>Natural ingredients</li>
                                    <li>Tastes better with milk</li>
                                    <li>Vitamins B2, B3, B5 and B6</li>
                                    <li>Refrigerate for freshness</li>
                                </ul>
                                <h6 class="mb-2">ingredients:</h6>
                                <p class="mb-0">Italian Plum Tomatoes From Italy's San Marzano Region, Extra Virgin
                                    Olive Oil, Fresh Garlic, Fresh Onions, Sea Salt, Fresh Basil, Spices, Citric Acid.
                                </p>
                            </div>
                            <div class="tab-pane fade px-4 py-5" id="info">
                                <h6 class="mb-2">Additional Information:</h6>
                                <table class="w-100 product-info-table">
                                    <tr>
                                        <td class="text-dark fw-semibold">Colors</td>
                                        <td>Black, Green, Orange, Red</td>
                                    </tr>
                                    <tr>
                                        <td class="text-dark fw-semibold">Weight</td>
                                        <td>0.5Kg, 1Kg, 2Kg, 5Kg</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="tab-pane fade px-4 py-5" id="review">
                                <div class="review-tab-box bg-white rounded pt-30 pb-40 px-4">
                                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="top-left">
                                            <h5 class="mb-2">Reviews (1)</h5>
                                            <p class="mb-0">Get specific details about this product from customers who
                                                own it.</p>
                                            <ul class="fs-xs text-warning d-flex mt-1">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                                <li class="ms-2 text-dark">(4 out of 5)</li>
                                            </ul>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-secondary border-secondary btn-md mt-3 mt-lg-0">Write
                                            a Review</a>
                                    </div>
                                    <hr class="mt-4 mb-4">
                                    <div class="users_review">
                                        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                            <div class="top-left d-flex align-items-center">
                                                <img src=" {{ asset('backend/assets/images/authors/user-1.jpg') }}"
                                                    alt="user" class="flex-shrink-0 rounded">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Helena Garcia</h6>
                                                    <span>2 January, 2018</span>
                                                </div>
                                            </div>
                                            <ul class="fs-xs text-warning d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mb-0">Information on technical characteristics, the delivery set,
                                            the country of manufacture and the appearance of the goods is for reference
                                            only and is based on the latest information of publication.</p>
                                    </div>
                                    <div class="users_review mt-4">
                                        <div class="d-flex align-items-center justify-content-between gap-3 flex-wrap">
                                            <div class="top-left d-flex align-items-center">
                                                <img src=" {{ asset('backend/assets/images/authors/user-2.jpg') }}"
                                                    alt="user" class="flex-shrink-0 rounded">
                                                <div class="ms-3">
                                                    <h6 class="mb-1">Helena Garcia</h6>
                                                    <span>2 January, 2018</span>
                                                </div>
                                            </div>
                                            <ul class="fs-xs text-warning d-flex">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="far fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <p class="mt-3 mb-0">Information on technical characteristics, the delivery set,
                                            the country of manufacture and the appearance of the goods is for reference
                                            only and is based on the latest information of publication.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-8">
                <div class="gshop-sidebar">
                    <div class="sidebar-widget info-sidebar bg-white rounded-3 py-3">
                        <div class="sidebar-info-list d-flex align-items-center gap-3 p-4">
                            <span
                                class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary">
                                <i class="fa-solid fa-truck-fast"></i>
                            </span>
                            <div class="info-right">
                                <h6 class="mb-1 fs-md">Free Shipping</h6>
                                <span class="fw-medium fs-xs">For orders from $50</span>
                            </div>
                        </div>
                        <div class="sidebar-info-list d-flex align-items-center gap-3 p-4 border-top">
                            <span
                                class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary">
                                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                            </span>
                            <div class="info-right">
                                <h6 class="mb-1 fs-md">100% Money Back</h6>
                                <span class="fw-medium fs-xs">Guaranteed Product Warranty</span>
                            </div>
                        </div>
                        <div class="sidebar-info-list d-flex align-items-center gap-3 p-4 border-top">
                            <span
                                class="icon-wrapper d-inline-flex align-items-center justify-content-center rounded-circle text-primary">
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <div class="info-right">
                                <h6 class="mb-1 fs-md">Safety & Secure</h6>
                                <span class="fw-medium fs-xs">Call us Anytime & Anywhere</span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget products-widget py-5 px-4 bg-white mt-4">
                        <div class="widget-title d-flex">
                            <h6 class="mb-0 flex-shrink-0">Featured Products</h6>
                            <span class="hr-line w-100 position-relative d-block align-self-end ms-1"></span>
                        </div>
                        <div class="sidebar-products-list">
                            <div
                                class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="#"><img src=" {{ asset('backend/assets/images/products/p-sm-1.png') }}"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="product-details.html" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-content mt-3 mt-sm-0">
                                    <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">Strawberry
                                        juice Fruit</a>
                                    <div class="pricing mt-0">
                                        <span class="fw-bold fs-xxs text-danger">$140.00</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                        <ul class="d-flex align-items-center me-2">
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="#"><img src=" {{ asset('backend/assets/images/products/p-sm-2.png') }}"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="product-details.html" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-content mt-3 mt-sm-0">
                                    <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">Strawberry
                                        juice Fruit</a>
                                    <div class="pricing mt-0">
                                        <span class="fw-bold fs-xxs text-danger">$140.00</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                        <ul class="d-flex align-items-center me-2">
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="#"><img src=" {{ asset('backend/assets/images/products/p-sm-3.png') }}"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="product-details.html" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-content mt-3 mt-sm-0">
                                    <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">Strawberry
                                        juice Fruit</a>
                                    <div class="pricing mt-0">
                                        <span class="fw-bold fs-xxs text-danger">$140.00</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                        <ul class="d-flex align-items-center me-2">
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="horizontal-product-card card-md d-sm-flex align-items-center bg-white rounded-2 gap-3 mt-4">
                                <div class="thumbnail position-relative rounded-2">
                                    <a href="#"><img src=" {{ asset('backend/assets/images/products/p-sm-4.png') }}"
                                            alt="product" class="img-fluid"></a>
                                    <div
                                        class="product-overlay position-absolute start-0 top-0 w-100 h-100 d-flex align-items-center justify-content-center gap-2 rounded-2">
                                        <a href="product-details.html" class="rounded-btn"><i
                                                class="fa-solid fa-eye"></i></a>
                                    </div>
                                </div>
                                <div class="card-content mt-3 mt-sm-0">
                                    <a href="#" class="d-block fs-sm fw-bold text-heading title d-block">Strawberry
                                        juice Fruit</a>
                                    <div class="pricing mt-0">
                                        <span class="fw-bold fs-xxs text-danger">$140.00</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-nowrap star-rating mt-1">
                                        <ul class="d-flex align-items-center me-2">
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                            <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="vertical-product-card rounded-bottom-2 position-relative border-0 border-top bg-white shadow-none">
                        <div class="thumbnail position-relative text-center p-4">
                            <img src=" {{ asset('backend/assets/images/products/apple.png') }}" alt="apple"
                                class="img-fluid">
                            <div class="product-btns position-absolute d-flex gap-2 flex-column">
                                <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                                <a href="#" class="rounded-btn">
                                    <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z"
                                            fill="#AEB1B9"></path>
                                    </svg>
                                </a>
                                <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                            </div>
                        </div>
                        <div class="card-content">
                            <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Fresh Organic</a>
                            <a href="#" class="card-title fw-bold d-block mb-2">Popped Rice Crisps Snacks Chocolate.</a>
                            <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                                <ul class="d-flex align-items-center me-2">
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                    <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <span class="flex-shrink-0">(5.2k Reviews)</span>
                            </div>
                            <h6 class="price text-danger mb-4">$140.00</h6>
                            <a href="#" class="btn btn-outline-secondary d-block btn-md border-secondary">Add to
                                Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--product details end-->

<!--related product slider start -->
<section class="related-product-slider pb-120">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-sm-8">
                <div class="section-title text-center text-sm-start">
                    <h2 class="mb-0">You may be interested</h2>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="rl-slider-btns text-center text-sm-end mt-3 mt-sm-0">
                    <button class="rl-slider-btn slider-btn-prev"><i class="fas fa-arrow-left"></i></button>
                    <button class="rl-slider-btn slider-btn-next ms-3"><i class="fas fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="rl-products-slider swiper mt-8">
            <div class="swiper-wrapper">
                <div class="vertical-product-card rounded-2 position-relative swiper-slide">

                    <div class="thumbnail position-relative text-center p-4">
                        <img src=" {{ asset('backend/assets/images/products/apple.png') }}" alt="apple"
                            class="img-fluid">
                        <div class="product-btns position-absolute d-flex gap-2 flex-column">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z"
                                        fill="#AEB1B9"></path>
                                </svg>
                            </a>
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Fresh Organic</a>
                        <a href="#" class="card-title fw-bold d-block mb-2">Popped Rice Crisps Snacks Chocolate.</a>
                        <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                            <ul class="d-flex align-items-center me-2">
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <span class="flex-shrink-0">(5.2k Reviews)</span>
                        </div>
                        <h6 class="price text-danger mb-3">$140.00</h6>
                        <div class="card-progressbar mb-2 rounded-pill">
                            <span class="card-progress bg-primary" data-progress="60%" style="width: 60%;"></span>
                        </div>
                        <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                        <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to
                            Cart</a>
                    </div>
                </div>
                <div class="vertical-product-card rounded-2 position-relative swiper-slide">

                    <div class="thumbnail position-relative text-center p-4">
                        <img src=" {{ asset('backend/assets/images/products/banana.png') }}" alt="apple"
                            class="img-fluid">
                        <div class="product-btns position-absolute d-flex gap-2 flex-column">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z"
                                        fill="#AEB1B9"></path>
                                </svg>
                            </a>
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Fresh Organic</a>
                        <a href="#" class="card-title fw-bold d-block mb-2">Popped Rice Crisps Snacks Chocolate.</a>
                        <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                            <ul class="d-flex align-items-center me-2">
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <span class="flex-shrink-0">(5.2k Reviews)</span>
                        </div>
                        <h6 class="price text-danger mb-3">$140.00</h6>
                        <div class="card-progressbar mb-2 rounded-pill">
                            <span class="card-progress bg-primary" data-progress="60%" style="width: 60%;"></span>
                        </div>
                        <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                        <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to
                            Cart</a>
                    </div>
                </div>
                <div class="vertical-product-card rounded-2 position-relative swiper-slide">

                    <div class="thumbnail position-relative text-center p-4">
                        <img src=" {{ asset('backend/assets/images/products/lemon.png') }}" alt="apple"
                            class="img-fluid">
                        <div class="product-btns position-absolute d-flex gap-2 flex-column">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z"
                                        fill="#AEB1B9"></path>
                                </svg>
                            </a>
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Fresh Organic</a>
                        <a href="#" class="card-title fw-bold d-block mb-2">Popped Rice Crisps Snacks Chocolate.</a>
                        <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                            <ul class="d-flex align-items-center me-2">
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <span class="flex-shrink-0">(5.2k Reviews)</span>
                        </div>
                        <h6 class="price text-danger mb-3">$140.00</h6>
                        <div class="card-progressbar mb-2 rounded-pill">
                            <span class="card-progress bg-primary" data-progress="60%" style="width: 60%;"></span>
                        </div>
                        <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                        <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to
                            Cart</a>
                    </div>
                </div>
                <div class="vertical-product-card rounded-2 position-relative swiper-slide">

                    <div class="thumbnail position-relative text-center p-4">
                        <img src=" {{ asset('backend/assets/images/products/orange-slice.png') }}" alt="apple"
                            class="img-fluid">
                        <div class="product-btns position-absolute d-flex gap-2 flex-column">
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-heart"></i></a>
                            <a href="#" class="rounded-btn">
                                <svg width="14" height="11" viewBox="0 0 14 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.705 0.201222C10.4317 0.469526 10.4317 0.904522 10.705 1.17283L11.6101 2.06107H7.70001C6.15364 2.06107 4.90001 3.29144 4.90001 4.80917V5.49619C4.90001 5.87564 5.21341 6.18322 5.60001 6.18322C5.98662 6.18322 6.30001 5.87564 6.30001 5.49619V4.80917C6.30001 4.0503 6.92679 3.43512 7.70001 3.43512H11.6101L10.705 4.32337C10.4317 4.59166 10.4317 5.02668 10.705 5.29496C10.9784 5.56325 11.4216 5.56325 11.695 5.29496L13.795 3.2339C14.0683 2.96559 14.0683 2.5306 13.795 2.26229L11.695 0.201222C11.4216 -0.0670741 10.9784 -0.0670741 10.705 0.201222ZM8.40001 4.80917C8.0134 4.80917 7.70001 5.11675 7.70001 5.49619V6.18322C7.70001 6.9421 7.07323 7.55726 6.30001 7.55726H2.38995L3.29498 6.66901C3.56835 6.40073 3.56835 5.9657 3.29498 5.69742C3.02161 5.42914 2.5784 5.42914 2.30503 5.69742L0.205023 7.75849C-0.0683411 8.02678 -0.0683411 8.4618 0.205023 8.73008L2.30503 10.7912C2.5784 11.0594 3.02161 11.0594 3.29498 10.7912C3.56835 10.5229 3.56835 10.0878 3.29498 9.81957L2.38995 8.93131H6.30001C7.84638 8.93131 9.10001 7.70092 9.10001 6.18322V5.49619C9.10001 5.11675 8.78662 4.80917 8.40001 4.80917Z"
                                        fill="#AEB1B9"></path>
                                </svg>
                            </a>
                            <a href="#" class="rounded-btn"><i class="fa-regular fa-eye"></i></a>
                        </div>
                    </div>
                    <div class="card-content">
                        <a href="#" class="mb-2 d-inline-block text-secondary fw-semibold fs-xxs">Fresh Organic</a>
                        <a href="#" class="card-title fw-bold d-block mb-2">Popped Rice Crisps Snacks Chocolate.</a>
                        <div class="d-flex align-items-center flex-nowrap star-rating fs-xxs mb-2">
                            <ul class="d-flex align-items-center me-2">
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                                <li class="text-warning"><i class="fa-solid fa-star"></i></li>
                            </ul>
                            <span class="flex-shrink-0">(5.2k Reviews)</span>
                        </div>
                        <h6 class="price text-danger mb-3">$140.00</h6>
                        <div class="card-progressbar mb-2 rounded-pill">
                            <span class="card-progress bg-primary" data-progress="60%" style="width: 60%;"></span>
                        </div>
                        <p class="mb-0 fw-semibold">Available: <span class="fw-bold text-secondary">40/100</span></p>
                        <a href="#" class="btn btn-outline-secondary btn-md border-secondary d-block mt-4">Add to
                            Cart</a>
                    </div>
                </div>
            </div>
        </div>
</section> <!--related products slider end-->




<script>
    document.addEventListener('DOMContentLoaded', () => {
        function renderTotalCartItems() {
            const totalItemsSpan = document.getElementById('total-items');
            const cart = JSON.parse(localStorage.getItem('cart')) || [];
            let totalQuantity = 0;
            cart.forEach(item => {
                totalQuantity += parseInt(item.quantity);
            });
            totalItemsSpan.textContent = totalQuantity;
        }

        function addToCart(button) {
            const id = button.dataset.id;
            const name = button.dataset.name;
            const price = button.dataset.price;
            const photo = button.dataset.photo;
            let cart = JSON.parse(localStorage.getItem('cart')) || [];
            let product = cart.find(item => item.id == id);
            if (product) {
                product.quantity += 1;
            } else {
                cart.push({ id, name, price, photo, quantity: 1 });
            }
            localStorage.setItem('cart', JSON.stringify(cart));
            button.textContent = 'Added to Cart';
            button.style.backgroundColor = '#28a745';
            button.style.borderColor = '#28a745';
            button.style.color = '#fff';
            setTimeout(() => {
                button.textContent = 'Add to Cart';
                button.style.backgroundColor = '';
                button.style.borderColor = '';
                button.style.color = '';
            }, 2000);
            renderTotalCartItems();
        }

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                addToCart(button);
            });
        });

        renderTotalCartItems();
    });
</script>