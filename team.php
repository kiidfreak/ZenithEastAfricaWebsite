<?php include("header.php"); ?>

<style type="text/css">
    .img-fluid1 {
        max-width: 100%;
        height: auto;
    }

    .img-fluid {
        max-width: 100%;
        height: 60px;
    }
</style>

<div id="ceo">
    <br>
    <br>
    <section class="ceoblog">
        <div class="containerwrap">

            <div class="container-fluid">
                <div class="row p-3-vh" style="padding-left: 0; padding-right: 0;">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="about-info sec-padd text-center mb-5">
                            <div class="section-title">
                                <h2>Meet our ceo</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-3 wow-outer">
                            <div class="blogcolumn wow slideInLeft" data-wow-delay=".1s">
                                <div class="imgtop">
                                    <img src="img/EstherNgomeli.jpg" alt="" class="img-fluid w-gallery-image ceo-image">
                                </div>
                                <div class="blogcont">
                                    <div class="headingblog">
                                        <a href="#">Esther Ngomeli</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="article-content">
                                <h2>Esther Ngomeli</h2>
                                <span>FCIM Founder/CEO</span>
                                <p>
                                    Esther Ngomeli is a Seasoned Entrepreneur and Marketer, with over twenty-five years (25)
                                    experience in corporate leadership and is the Founder/CEO of Zenith East Africa Limited, a
                                    strategic business management and integrated communication group. Her recent assignment was
                                    with Redhouse Group, a multi-function, Integrated Marketing Communications (IMC) agency with
                                    an expansive footprint in East and Central Africa where she was the Co-Founder and Director
                                    while also handling the responsibilities of the Group Chief Operating Officer (COO) & Deputy
                                    CEO. Previously, she held the position of Founder and Managing Director of the anchor
                                    advertising agency within Redhouse Group – BBDO Media Edge Interactive Limited.
                                </p>
                                <!-- Add the Bootstrap Collapse class and ID to the content you want to collapse -->
                                <div class="collapse" id="readMoreContent">
                                    <p>
                                        As an entrepreneur and business leader, she has been instrumental in providing
                                        Strategic Business and Communications Counsel that has resulted in the growth of these
                                        startup organizations within Redhouse Group; as well as growing key brands and
                                        businesses, both on national, regional and global platforms, and in multiple sectors. She
                                        has honed her competencies in Leadership, Strategic Planning, Business and Financial
                                        Management, Marketing, Stakeholder Management and Integrated Communication, powered by a
                                        knack for creativity and a passion for growing great brands and businesses in sub-Saharan
                                        Africa.
                                    </p>
                                    <p>
                                        She also has been responsible for initiating and growing Media Edge Group and its
                                        subsidiary business units from infancy in the year 2000, into reputable brands in
                                        various marketing communication disciplines, led by Media Edge Interactive now BBDO Media
                                        Edge Interactive, which was rated one of the TOP 100 fastest growing Medium Sized
                                        Companies in Kenya in the KPMG Business Daily TOP 100 Index and also has won coveted
                                        awards from the Grand Prix - Kenya’s first and only at the Loeries Awards – Africa
                                        Chapter, Gold Loeries, APA awards just to name a few.
                                    </p>
                                    <!-- Add more content as needed -->
                                </div>

                                <!-- Button to trigger the collapse -->
                                <div class="link_btn">
                                    <a href="javascript:void(0);" onclick="toggleReadMore()" class="btn btn-link" id="thm-btn">Read
                                        more <i class="vc_btn3-icon fas fa-chevron-right" aria-hidden="true"></i></a>
                                </div>
                                <div class="read-more-space"><p></p></div>
                                <script>
                                    function toggleReadMore() {
                                        var readMoreContent = document.getElementById('readMoreContent');
                                        var thmBtn = document.getElementById('thm-btn');

                                        if (readMoreContent.classList.contains('show')) {
                                            readMoreContent.classList.remove('show');
                                            thmBtn.innerText = 'Read more';
                                            thmBtn.setAttribute('aria-expanded', 'false');
                                        } else {
                                            readMoreContent.classList.add('show');
                                            thmBtn.innerText = 'Show less';
                                            thmBtn.setAttribute('aria-expanded', 'true');
                                        }
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="vc_custom_heading text_align_center">
                        <h4 style="font-size: 28px;color: #ffffff;line-height: 34px;text-align: center"
                            class="consulting-custom-title">Our team, a collective of consultants with years of experience
                            managing global brands in different sectors are united as a single force, bringing boundless
                            creativity, innovation and expertise to deliver results that leave an indelible mark.
                            <br /><mark>Together, we're shaping a better tomorrow.</mark>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="team">
    <br />
    <br />
    <section class="achivement-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="about-info sec-padd text-center mb-5">
                        <div class="section-title">
                            <h2>Team</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="slick-slider blog-slider">
                        <div class="item text-white">
                            <div class="success_items">
                                <div class="user-profile-test">
                                    <a href="#"><img src="img/testimonial/team1.webp" alt="Success"
                                            class="user_img img-fluid1"></a>
                                </div>
                                <div class="text-md-left text-center">
                                    <div class="info">
                                        <h4 class="no_stripe">
                                            <a href="" tabindex="0">
                                                Person 1
                                            </a>
                                        </h4>
                                        <div class="position">Sales &amp; Marketing</div>
                                        <p>Tagline</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-white">
                            <div class="success_items">
                                <div class="user-profile-test">
                                    <a href="#"><img src="img/testimonial/team1.webp" alt="Success"
                                            class="user_img img-fluid1"></a>
                                </div>
                                <div class="text-md-left text-center">
                                    <div class="info">
                                        <h4 class="no_stripe">
                                            <a href="" tabindex="0">
                                                Person 2
                                            </a>
                                        </h4>
                                        <div class="position">Sales &amp; Marketing</div>
                                        <p>Tagline</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-white">
                            <div class="success_items">
                                <div class="user-profile-test">
                                    <a href="#"><img src="img/testimonial/team1.webp" alt="Success"
                                            class="user_img img-fluid1"></a>
                                </div>
                                <div class="text-md-left text-center">
                                    <div class="info">
                                        <h4 class="no_stripe">
                                            <a href="" tabindex="0">
                                                Person 3
                                            </a>
                                        </h4>
                                        <div class="position">Sales &amp; Marketing</div>
                                        <p>Tagline</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item text-white">
                            <div class="success_items">
                                <div class="user-profile-test">
                                    <a href="#"><img src="img/testimonial/team1.webp" alt="Success"
                                            class="user_img img-fluid1"></a>
                                </div>
                                <div class="text-md-left text-center">
                                    <div class="info">
                                        <h4 class="no_stripe">
                                            <a href="" tabindex="0">
                                                Person 4
                                            </a>
                                        </h4>
                                        <div class="position">Sales &amp; Marketing</div>
                                        <p>Tagline</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add more team members as needed -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


    <?php include("footer.php"); ?>
</div>
