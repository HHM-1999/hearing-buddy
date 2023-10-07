<?php include_once "common/config.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo $sSiteTitle; ?></title>

    <?php echo $sAddSense;
    echo $sGAnalytics;
    echo $sGTagHead;
    echo $sDomainVerification;
    echo $sMSClarity; ?>

    <meta name="description" content="<?php echo $sSiteTitle; ?>">
    <meta name="keywords" content="<?php echo $sSiteTitle; ?>">

    <meta name="author" content="<?php echo $sAuthor; ?>">
    <meta name="Developer" content="<?php echo $sDeveloper; ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo $sEmail; ?>">
    <meta name="copyright" content="Copyright (c) <?php echo gmdate("Y"); ?>. All Rights &reg; Reserved by <?php echo $sSiteURL; ?>.">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">

    <meta property="fb:pages" content="<?php echo $sFBPageID; ?>">
    <meta property="fb:app_id" content="<?php echo $sAppId; ?>">
    <meta property="og:site_name" content="<?php echo $sSiteName; ?>">
    <meta property="og:title" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:description" content="<?php echo $sSiteTitle; ?>">
    <meta property="og:url" content="<?php echo $sSiteURL; ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo $sLogoURLfb; ?>">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo $sSiteName; ?>">
    <meta name="twitter:title" content="<?php echo $sSiteTitle; ?>">
    <meta name="twitter:description" content="<?php echo $sSiteTitle; ?>">
    <meta name="twitter:image" content="<?php echo $sLogoURLfb; ?>">

    <link rel="image_src" href="<?php echo $sLogoURLfb; ?>">
    <link rel="canonical" href="<?php echo $sSiteURL; ?>">

    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $sFavicon; ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo $sFavicon; ?>">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Titillium+Web:wght@400;600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <?php
    echo $sCSSBootStrap;
    echo $sCSSFontAwesome;
    echo $sCSSSlick;
    echo $sCSSEMM;
    ?>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "Organization",
            "name": "<?php echo $sSiteName; ?>",
            "url": "<?php echo $sSiteURL; ?>",
            "logo": "<?php echo $sLogoURL; ?>",
            "alternateName": "<?php echo $sInitialBN; ?>",
            "sameAs": [
                "<?php echo $sSocialPageFB; ?>"
            ]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo $sSiteURL; ?>"
            }]
        }
    </script>

</head>

<body>
    <?php
    echo $sGTagBody;
    echo $sFbRoot; ?>

    <?php include_once "common/header.php"; ?>

    <!-- Back to top button -->
    <a id="button"><i class="fas fa-chevron-up"></i></a>

    <main>

        <!-- hero area -->
        <section class="hero-area">
            <div class="container-fluid">
                <div class="ser-slider-active">
                    <div class="banner-container">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/s2.jpg" alt="">
                            </div>
                            <div class="col-md-6 details-wrapper-main d-flex align-items-md-center justify-content-center">
                                <div class="banner-wrapper">
                                    <div class="slider-items-details">
                                        <h1>A Buddy that Listens </h1>
                                        <p>"We listen with an intent to understand"</p>
                                        <a href="<?php echo $sSiteURL; ?>about" alt="discover-more" title="discover-more">Discover More</a>
                                    </div>
                                    <div class="bg-effect-1">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-363.svg" alt="">
                                    </div>
                                    <div class="bg-effect-2">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-52.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-icon">
                            <i class="fas fa-assistive-listening-systems"></i>
                        </div>
                    </div>
                    <div class="banner-container">
                        <!-- <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/sl3.jpg" alt="">
                        <div class="slider-items-details">
                            <h3>A Buddy that Cares</h3>
                            <p>"You are not a number to us"</p>
                            <a href="#" alt="discover-more" title="discover-more">Discover More</a>
                        </div> -->
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/s3.jpg" alt="">

                            </div>
                            <div class="col-md-6 details-wrapper-main d-flex align-items-md-center justify-content-center">
                                <div class="banner-wrapper">
                                    <div class="slider-items-details">
                                        <h1>A Buddy that Cares</h1>
                                        <p>"You are not a number to us"</p>
                                        <a href="<?php echo $sSiteURL; ?>about" alt="discover-more" title="discover-more">Discover More</a>
                                    </div>
                                    <div class="bg-effect-1">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-363.svg" alt="">
                                    </div>
                                    <div class="bg-effect-2">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-52.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-icon">
                            <i class="fas fa-assistive-listening-systems"></i>
                        </div>
                    </div>
                    <div class="banner-container">
                        <!-- <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/sl2.jpg" alt="">
                        <div class="slider-items-details">
                            <h3>A Buddy that understands Your Investment</h3>
                            <p>"Time is of a great value, and we believe the greatest gift you can give someone is your time"</p>
                            <a href="https://www.hearingbuddy.com.au/about" alt="discover-more" title="discover-more">Discover More</a>
                        </div> -->
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/s1.jpg" alt="">

                            </div>
                            <div class="col-md-6 details-wrapper-main d-flex align-items-md-center justify-content-center">
                                <div class="banner-wrapper">
                                    <div class="slider-items-details">
                                        <h1>A Buddy that understands Your Investment</h1>
                                        <p>"Time is of a great value, and we believe the greatest gift you can give someone is your time"</p>
                                        <a href="<?php echo $sSiteURL; ?>about" alt="discover-more" title="discover-more">Discover More</a>
                                    </div>
                                    <div class="bg-effect-1">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-363.svg" alt="">
                                    </div>
                                    <div class="bg-effect-2">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-52.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-icon">
                            <i class="fas fa-assistive-listening-systems"></i>
                        </div>
                    </div>
                    <div class="banner-container">
                        <!-- <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/sl3.jpg" alt="">
                        <div class="slider-items-details">
                            <h3>A Buddy that Cares</h3>
                            <p>"You are not a number to us"</p>
                            <a href="#" alt="discover-more" title="discover-more">Discover More</a>
                        </div> -->
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/s4.jpg" alt="">

                            </div>
                            <div class="col-md-6 details-wrapper-main d-flex align-items-md-center justify-content-center">
                                <div class="banner-wrapper">
                                    <div class="slider-items-details">
                                        <h1>A Buddy that Empowers</h1>
                                        <p>"Tell me and I forget. Teach me and I remember. Involve me and I learn."</p>
                                        <a href="#" alt="discover-more" title="discover-more">Discover More</a>
                                    </div>
                                    <div class="bg-effect-1">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-363.svg" alt="">
                                    </div>
                                    <div class="bg-effect-2">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/shape-52.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-icon">
                            <i class="fas fa-assistive-listening-systems"></i>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- hero area end -->

        <!-- services area -->
        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="heading">
                            <h2>Our services</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>ear-wax-removal">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Ear-Wax-Removal-img_275x409.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>Ear Wax Removal</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper ">
                            <a href="<?php echo $sSiteURL; ?>hearing-screening">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/3.png" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>Hearing Screening</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>90-min-initial-comprehensive-hearing-assessment">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/comprehensive_hearing_assessment2.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>90 Min Initial Comprehensive Hearing Assessment</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>diagnostic-assessment">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/diagnostic_assessment.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>Diagnostic Assessment</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>hearing-aid-discussion">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing_aid_discussion.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>Hearing Aid Discussion</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>pre-employment-test">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/pre_employment_test.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>Pre-Employment Test</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>custom-ear-plugs">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/custom_ear_plug.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>CUSTOM EAR PLUGS</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>work-cover-assessment">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/work_cover_assessment.jpg" alt="">
                                </div>
                                <div class="service-details-wrapper">
                                    <div class="service-details">
                                        <h3>Work Cover Assessment</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="see-more">
                    <a class="common-button btn text-center" href="<?php echo $sSiteURL; ?>services">See more</a>
                </div>
            </div>
        </section>
        <!-- services area end -->

        <!-- Hearing Aids -->
        <section class="aid-area">
            <div class="container">
                <div class="aid-heading">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="heading">
                                <h2>Hearing Aids</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class=" col-md-4 d-flex justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>buddy-pack">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>BUDDY PACK</h3>
                                </div>
                                <div class="aid-icon">
                                    <i class="fas fa-box"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>choosing-a-hearing-aid">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>Choosing a Hearing Aid SOLUTIONS</h3>

                                </div>
                                <div class="aid-icon">
                                    <i class="fas fa-assistive-listening-systems"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>hearing-aid-prices">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>Hearing Aid Prices</h3>

                                </div>
                                <div class="aid-icon">
                                    <i class="fas fa-dollar-sign"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>where-can-i-buy-hearing-aids-from">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>Where Can I Buy Hearing Aids From?</h3>

                                </div>
                                <div class="aid-icon">
                                    <i class="far fa-question-circle"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>technology-in-hearing-aids-today">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>Technology in Hearing Aids Today</h3>

                                </div>
                                <div class="aid-icon">
                                    <i class="fas fa-cogs"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>types-of-hearing-aids">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>Types Of Hearing Aids</h3>

                                </div>
                                <div class="aid-icon">
                                    <i class="fas fa-list-ol"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex m-auto justify-content-center">
                        <div class="aid-item">
                            <a href="<?php echo $sSiteURL; ?>our-brands">
                                <div class="txt d-flex align-items-center justify-content-center">
                                    <h3>Our Brands</h3>

                                </div>
                                <div class="aid-icon">
                                    <i class="fas fa-tags"></i>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Hearing Aids end -->
        <!-- details area -->
        <section class="details-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6  d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="detailsInfo">
                                        <h4>Your Local Hearing Aid Specialist</h4>
                                        <h2>Committed in providing exceptional service, underpinned with a premium
                                            level of care and compassion!</h2>
                                        <p class="smallHead">Welcome to hearing buddy SA:</p>
                                        <p>Hearing Buddy is a newly established family-owned, independent hearing care provider in
                                            South Australia and covers locations across Adelaide. We focus on providing professional
                                            advice to all our clients and work with each individual to find the most suitable
                                            solution for their needs.</p>
                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>local-hearing">Read more !</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="aid-specialist-img">
                            <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/smiling-women.jpg" title="aid specialist image" alt="aid specialist image">
                        </div>
                    </div>
                </div>
        </section>
        <!-- details area end -->

        <!-- facilities area -->
        <section class="facilities-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="facilities-wrap">
                            <div class="row">
                                <div class="col-md-4 col-4 d-flex justify-content-center align-items-center">
                                    <div class="facility-wrapper">
                                        <div class="fac-icon">
                                            <i class="fas fa-street-view"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8 d-flex align-items-center">
                                    <div class="facility-text-wrapper">
                                        <h3>Independent and Proudly SA Owned</h3>
                                        <p>We are proud to be one of the few clinics in South Australia that is not owned by a hearing aid company. This assure</p>
                                        <a href="<?php echo $sSiteURL; ?>independent-sa-owner" class="common-button btn" alt="independent SA owner" title="independent SA owner">Independent SA owner</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="facilities-wrap">
                            <div class="row">
                                <div class="col-md-4 col-4 d-flex justify-content-center align-items-center">
                                    <div class="facility-wrapper">
                                        <div class="fac-icon">
                                            <i class="fas fa-undo"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8 d-flex align-items-center">
                                    <div class="facility-text-wrapper">
                                        <h3>Money Back Guarantee</h3>
                                        <p>All our devices come with 60-day money back guarantee rather than the industry standard 30-day trial.Whether you are an experienced user upgrading to new technology</p>
                                        <a href="<?php echo $sSiteURL; ?>money-back-guarantee" class="common-button btn" alt="Money Back Guarantee" title="Money Back Guarantee">Money Back Guarantee</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="facilities-wrap">
                            <div class="row">
                                <div class="col-md-4 col-4 d-flex justify-content-center align-items-center">
                                    <div class="facility-wrapper">
                                        <div class="fac-icon">
                                            <i class="fas fa-crown"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8 d-flex align-items-center">
                                    <div class="facility-text-wrapper">
                                        <h3>Government Accredited</h3>
                                        <p>The Australian Government Hearing Services Program offers one of the most progressive hearing services programmes in the world. Our government recognises the</p>
                                        <a href="<?php echo $sSiteURL; ?>government-accredited" class="common-button btn" alt="Government Accredited" title="Government Accredited">Government Accredited</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="facilities-wrap">
                            <div class="row">
                                <div class="col-md-4 col-4 d-flex justify-content-center align-items-center">
                                    <div class="facility-wrapper">
                                        <div class="fac-icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-8 d-flex align-items-center">
                                    <div class="facility-text-wrapper">
                                        <h3>Home Visits</h3>
                                        <p>When you need us the most, we'll be there for you. Providing in-home hearing services while adhering to SA Health guidelines.Hearing Buddy recognizes that you</p>
                                        <a href="<?php echo $sSiteURL; ?>home-visit" class="common-button btn" alt="Home Visits" title="Home Visits">Home Visits</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-md-3">
                        <div class="facility-wrapper">
                            <div class="fac-icon">
                                <i class="fas fa-crown"></i>
                            </div>
                            <h3>Government Accredited</h3>
                            <p>The Australian Government Hearing Services Program offers one of the most progressive hearing services programmes in the world. Our government recognises </p>
                            <a href="#" class="common-button btn" alt="Government accredited" title="Government accredited">Government accredited</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="facility-wrapper">
                            <div class="fac-icon">
                                <i class="fas fa-undo"></i>
                            </div>
                            <h3>Money Back Guarantee</h3>
                            <p>All our devices come with 60-day money back guarantee rather than the industry standard 30-day trial.Whether you are an experienced user upgrading to new technology</p>
                            <a href="#" class="common-button btn" alt="Money back guarantee" title="Money back guarantee">Money back guarantee</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="facility-wrapper">
                            <div class="fac-icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <h3>Home Visits</h3>
                            <p>When you need us the most, we'll be there for you. Providing in-home hearing services while adhering to SA Health guidelines.Hearing Buddy recognizes that you</p>
                            <a href="#" class="common-button btn" alt="Home visit" title="Home visit">Home visit</a>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- facilities area end -->

        <!-- flip card area -->
        <section class="testing-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="testing-text">
                            <h3>Free 10min. Online Hearing Test</h3>
                            <p>Test your hearing online and get instant report !</p>
                            <a class="common-button btn" href="https://hearing-screener.beyondhearing.org/HearingBuddy/VBim7A/welcome" target="_blank">Start Test</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="testing-text">
                            <h3>Want to book an appointment</h3>
                            <p>We reply instantly… just give us a call NOW !</p>
                            <a class="common-button btn" href="tel:+0468767370" target="_blank">+0468767370</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- flip card area end -->

        <!-- owner area -->
        <section class="owner-section">
            <div class="row">
                <div class="heading">
                    <h2>Meet Shaily Bath</h2>
                </div>
            </div>
            <div class="owner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 owner-bg text-center">
                            <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/owner.png" title="Shaily Bath" alt="">
                        </div>
                        <div class="col-md-6  d-flex align-items-center">
                            <div class="feedback">
                                <p>Shaily is the Principal Owner and Senior Hearing Aid Specialist of Hearing Buddy SA. She has a Diploma in Hearing Device Prescription and is also a Government accredited qualified practitioner with the Hearing Service Program, including being a full member of the Australian College of Audiology (ACAud).</p>
                                <p>Shaily also has a Bachelor of Business with a major in Accounting and Finance. Importantly, she has over five years of clinical experience in the Hearing Care industry in Australia before making a decision to bring her passion of helping others to live on her terms through Hearing Buddy SA.</p>
                                <p>Shaily has called Australia home for over two decades and is deeply passionate about bringing family values to the workplace. A keen advocate for inclusiveness and work-life balance, Shaily spends her free time with her husband and two high school-going daughters and focuses on her physical and mental wellbeing.</p>
                                <a class="common-button btn mt-4" href="tel:+0468767370" alt="+0468767370" title="+0468767370">Please call +0468767370</a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- owner area end -->

        <!-- ear wax area -->
        <section class="earwax-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Suffering from Earache or a Buildup of Ear Wax?</h2>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-8">
                        <div class="wax-details">
                            <p>When it comes to wax accumulation, some people are more prone than others. One out of every 20 adults, and more than a third of the elderly and developmentally delayed populations, have excessive or impacted cerumen.</p>
                            <p>The chance of ear wax accumulation increases with the use of cotton swabs, hearing aids, regular earphone use, and a small, curved, or hairy ear canal. Wax build-up in the ear can cause a variety of unpleasant side effects, including diminished hearing, a full feeling in the ear, tinnitus, irritation, pain, and even discharge.</p>
                            <p>We specialise in removing impacted earwax using dry and effective micro-suction technology, thereby alleviating the discomfort associated with excessive earwax.</p>

                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-center ">
                        <div class="wax-img">
                            <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/wax.jpg" title="Shaily Bath" alt="">
                        </div>
                    </div>
                </div>
                <div class="earWaxLinks mt-4  d-flex justify-content-center">
                    <a class="common-button btn" href="<?php echo $sSiteURL; ?>contact">Contact Us</a>
                    <a class="common-button btn" href="<?php echo $sSiteURL; ?>ear-wax-management">Ear Wax Management</a>
                </div>
            </div>
        </section>
        <!-- ear wax area end -->

        <!-- tinnitus management -->
        <section class="management-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Tinnitus Management</h2>
                        </div>
                    </div>
                    <div class="tinnitus-content">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center justify-content-center">
                                <div class="tinnitus-detail">
                                    <h2>Tinnitus Treatment: <br> Finding Relief From Persistent Ringing In The Ears</h2>
                                    <p>Tinnitus is a condition characterized by the perception of sound without any external source. This phantom noise can range from a low hum to a high-pitched ringing and can be intermittent or constant, significantly impacting an individual's quality of life. Fortunately, there are numerous treatment options available to help manage tinnitus and provide relief to those affected by this persistent condition.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a class="common-button btn" href="<?php echo $sSiteURL; ?>tinnitus-management">View more</a>
                </div>
            </div>
        </section>
        <!-- tinnitus management end -->

        <!-- serve-location -->
        <section class="serve-area">
            <div class="container">
                <div class="serve-location">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="heading">
                                <h2 class="text-center">Opening times and Locations Servicing:</h2>
                                <p class="sub-text">Right now, we provide hearing services in the following locations:</p>
                            </div>
                        </div>
                    </div>
                    <section class="custom">
                        <div class="row">
                            <div class=" col-sm-6 col-md-4 d-flex ">
                                <div class="serve-card">
                                    <h2>DULWICH</h2>
                                    <h3><i class="fas fa-calendar-alt"></i> Monday - Friday</h3>
                                    <p> <i class="fas fa-clock"></i> 9am-5pm</p>
                                    <p>63 Dulwich Ave. Dulwich SA 5065</p>
                                    <div class="location-icon">
                                        <a target="_blank" href="https://goo.gl/maps/bE37chXFMdqaAXp67">
                                            <div class="location-wrapper">
                                                <i class="fas fa-location-arrow"></i>
                                                <svg class="svg-icon" viewBox="0 0 20 20">
                                                    <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-sm-6 col-md-4 d-flex ">
                                <div class="serve-card">
                                    <h2>TORRENSVILLE</h2>
                                    <h3><i class="fas fa-calendar-alt"></i>Wednesday</h3>
                                    <p> <i class="fas fa-clock"></i>9am-5pm(By Appointments Only)</p>
                                    <p>Brickworks Medical Centre</p>
                                    <p>2 Ashwin Pde. Torrensville SA 5031</p>
                                    <div class="location-icon">
                                        <a target="_blank" href="https://goo.gl/maps/69qjgdRwwAcuP23LA">
                                            <div class="location-wrapper">
                                                <i class="fas fa-location-arrow"></i>
                                                <svg class="svg-icon" viewBox="0 0 20 20">
                                                    <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                                </svg>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- <div class="location-icon">
                                        <a target="_blank" href="                                        https://goo.gl/maps/69qjgdRwwAcuP23LA
"><i class="fas fa-location-arrow"></i></a>
                                    </div> -->
                                </div>
                            </div>
                            <div class=" col-sm-6 col-md-4 d-flex ">
                                <div class="serve-card">
                                    <h2>Home/Aged Care visits</h2>
                                    <h3><i class="fas fa-calendar-alt"></i> Monday - Friday</h3>
                                    <p> <i class="fas fa-clock"></i> Appointments available only upon request (t&c apply)</p>
                                    <p> Various Locations</p>
                                    <div class="location-icon">

                                        <div class="location-wrapper">
                                            <i class="fas fa-location-arrow"></i>
                                            <svg class="svg-icon" viewBox="0 0 20 20">
                                                <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                                            </svg>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="serve-footer  wow bounceIn">
                                <h3>If your area isn’t listed above and you’d like us to come visit, Please <a href="#" title="contact us">Contact Us</a> to schedule an appointment</h3>
                                <a class="common-button btn" href="tel:+0468767370">Phone: +0468767370</a>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <!-- serve-location end -->
    </main>

    <?php include_once "common/footer.php"; ?>

    <?php echo $sJSjQuery;
    echo $sJSBootStrap;
    echo $sPopper;
    echo $sJSSlick;
    echo $sJSEMM;
    ?>
</body>

</html>