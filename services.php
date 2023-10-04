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
        <div class="page-heading">
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Services</h1>
                </div>
            </div>
        </div>
        <div class="breadcrump-area">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="breadcrump-wrapper">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="http://localhost/HearingBuddyNew/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>services">Our Services</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <section class="services-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>ear-wax-removal">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Ear-Wax-Removal-img_275x409.jpg" alt="">
                                </div>
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                                <div class="service-detail-wrapper">
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
                    <div class="col-md-3">
                        <div class="servcie-wrapper">
                            <a href="<?php echo $sSiteURL; ?>hearing-aid-fitting-&-follow-up-free">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing_aid_fitting_and_followup.jpg" alt="">
                                </div>
                                <div class="service-detail-wrapper">
                                    <div class="service-details">
                                        <h3>Hearing Aid fitting and follow up</h3>
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
                            <a href="<?php echo $sSiteURL; ?>hearing-aid-check-and-adjust">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing_aid_check.jpg" alt="">
                                </div>
                                <div class="service-detail-wrapper">
                                    <div class="service-details">
                                        <h3>Hearing Aid Check and Adjust</h3>
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
                            <a href="<?php echo $sSiteURL; ?>end-of-warranty-recalls">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/warranty_recalls.jpg" alt="">
                                </div>
                                <div class="service-detail-wrapper">
                                    <div class="service-details">
                                        <h3>End of Warranty Recalls</h3>
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
                            <a href="<?php echo $sSiteURL; ?>hearing-aids-purchased-elsewhere">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing_aids_purchased.jpg" alt="">
                                </div>
                                <div class="service-detail-wrapper">
                                    <div class="service-details">
                                        <h3>Hearing Aids Purchased Elsewhere</h3>
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
                            <a href="<?php echo $sSiteURL; ?>tinnitus-assessment">
                                <div class="service-img">
                                    <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/tinnitus_assessment.jpg" alt="">
                                </div>
                                <div class="service-detail-wrapper">
                                    <div class="service-details">
                                        <h3>Tinnitus Assessment</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </main>

    <?php include_once "common/footer.php"; ?>

    <?php echo $sJSjQuery;
    echo $sPopper;
    echo $sJSBootStrap;
    echo $sJSEMM;
    ?>
</body>

</html>