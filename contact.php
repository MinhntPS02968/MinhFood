
<?php include 'header.php';?>
<div class="baner row mx-0 bg-dark">
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
    <div class="row contact-map mx-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11084.336089056826!2d106.69375046916498!3d10.8186119
    01847417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528f1f95cf5cb%3A0xf9e7b4f2adbd6adb!2sEmart%20Go%20Vap!5e0
    !3m2!1sen!2s!4v1585935322157!5m2!1sen!2s" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <div class="row mx-0">
        <div class="container contact-main mt-5">
            <div class="row mx-0">
                <div class="col-md-8">
                    <h3 class="pb-3">LEAVE MESSAGE!</h3>
                    <form>
                        <div class="row mx-0 mb-2">
                            <div class="col-sm-4 mb-2">
                                <input class="form-control rounded-0" type="text" id="ContactFormName" name="your name" placeholder="Your Name *" autocapitalize="words" value="">
                            </div>
                            <div class="col-sm-4  mb-2">
                                <input class="form-control rounded-0" type="email" id="ContactFormemail" name="your email" placeholder="Your Email *" autocapitalize="words" value="">
                            </div>
                            <div class="col-sm-4  mb-2">
                                <input class="form-control rounded-0" type="number" id="ContactFormphone" name="your phone" placeholder="Your phone *" autocapitalize="words" value="">
                            </div>
                        </div>
                        <div class="row mx-0 mb-5 mt-2">
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="10" id="ContactFormMessage" name="contact[body]" placeholder="Message *"></textarea>
                                <input type="submit" class="btn btn-secondary rounded-0 my-4" value="Send Message">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3 class="pb-3">CONTACT INFORMATION</h3>
                    <ul>
                        <li><strong>Adress : </strong>C4 Nguyễn Cơ Thạch - Mỹ Đình Hà Nội</li>
                        <li><strong>Hotline  : </strong>(+84) 6 888 888</li>
                        <li><strong>Email : </strong>hello@lifeisgood.com</li>
                        <li><strong>Open Time : </strong>Thứ 2– Thứ 7: 9:00 – 18:00</li>
                    </ul>
                    <p><a href="javascript:void (0)"><i class="fab fa-2x fa-facebook-square mx-2"></i></a> <a href="javascript:void (0)"><i class="fab fa-2x fa-twitter mx-2"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php';?>

