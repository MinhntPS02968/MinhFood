
<?php include 'header.php';?>
<div class="baner row mx-0 mb-5 bg-dark">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark rounded-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
        </nav>
    </div>
</div>
<section>
<div class="container">
    <div class="row mx-0 mb-5">
        <div class="col-md-5 col-sm-6">
            <img src="images/gallery_1.jpg" class="w-100">
        </div>
        <div class="col-md-7 col-sm-6 product-detail-main">
            <h1>Ớt ngọt Đà Lạt</h1>
            <div class="product-detail-price">500,000đ</div>
            <div class="product-detail-desc">
                Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức.
                Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe,
                tốt cho tim mạch, ngăn ngừa tiến trình bệnh tiểu đường.   Cũng như Táo, Nho của Mỹ, Úc… đều được
                bảo quản trong môi trường lạnh đặc biệt từ khi hái, không chất bảo quản và các chất gây hại cho sức khỏe.
            </div>
            <form>
                <div class="product-actions pb-5">
                    <div class="product-quantity">
                        <label for="quantity">Quantity </label>
                        <input class="quantity" type="number" id="Quantity" name="quantity" value="1">
                    </div>
                    <input type="submit" name="add" class="btn product-add-cart float-left mr-2" id="product-addTocart" value="Thêm vào giỏ hàng">
                    <a href="#" class="wish-list float-left  d-flex align-items-center justify-content-center">
                        <i class="far fa-heart"></i>
                    </a>
                </div>
            </form>
            <div class="product-sharing ">
                <a href="javascript:void (0)"><i class="fab fa-2x fa-facebook-square mx-2"></i></a>
                <a href="javascript:void (0)"><i class="fab fa-2x fa-twitter mx-2"></i></a>
                <a href="javascript:void (0)"><i class="fab fa-2x fa-google-plus-g mx-2"></i></a>
            </div>
        </div>
    </div>

    <div class="row mx-0">
        <div class="col-md-12">
            <div class="card mt-3 tab-card border-0">
                <div class="card-header border-0 row tab-card-header product-header">
                    <ul class="nav nav-tabs card-header-tabs col-md-11" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">
                                DESCRIBE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">/</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">
                                OPTION</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="tabs-product">
                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                        <div class="row mx-0">
                            Giá trị dinh dưỡng:   Nho tươi cung cấp các chất dinh dưỡng, làm giảm mệt nhọc ngay lập tức.
                            Các nghiên cứu cho thấy Nho tươi có chứa vitamin A, C, Calcium và sắt giúp duy trì sức khỏe,
                            tốt cho tim mạch, ngăn ngừa tiến trình bệnh tiểu đường.   Cũng như Táo, Nho của Mỹ, Úc… đều
                            được bảo quản trong môi trường lạnh đặc biệt từ khi hái, không chất bảo quản và các chất
                            gây hại cho sức khỏe.
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="row mx-0">
                            The standard Lorem Ipsum passage, used since the 1500s "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                            ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum." Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC "Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
                            velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                            commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae
                            consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-header border-0 row tab-card-header product-header">
        <div class="col-md-11"></div>
        <div class="col-md-1">
            <a class="carousel-control-prev btn-slide-control bg-dark" href="#Slide-product" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next btn-slide-control bg-dark" href="#Slide-product" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="row mt-5">
        <div id="Slide-product" class="carousel slide col-md-12" data-ride="carousel">
            <div class="carousel-inner row">
                <div class="carousel-item col-md-12 active">
                    <div class="row">
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner">
                                <img src="images/product1.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner">
                                <img src="images/product2.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner">
                                <img src="images/product3.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner">
                                <img src="images/product4.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-12">
                    <div class="row">
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product1.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product2.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product3.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner"">
                                <img src="images/product4.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-12">
                    <div class="row">
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product1.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product2.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product3.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                        <div class="col-md-3 product-item">
                            <a href="javascript:void(0)" class="product-inner" style="z-index: 1">
                                <img src="images/product4.webp" class="w-100">
                                <div class="icon-sale">sale</div>
                            </a>
                            <div class="product-buy text-center">
                                <button class="mx-1 btn-buy"><i class="fas fa-shopping-cart"></i></button>
                                <button class="mx-1 btn-see"><i class="far fa-eye"></i></button>
                            </div>
                            <div class="product-infor text-center">
                                <div class="product-text"><a href="javascript:void(0)">Chanh Dây Đỏ Úc</a></div>
                                <div class="price-box">400,000đ <span class="old-price">500,000 đ</span></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<?php include 'footer.php';?>

