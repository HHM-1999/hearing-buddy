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
                    <h1>About Us</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>about">About Us</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="our-purpose-area">
            <div class="container">
                <div class="purpose-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Our purpose</h2>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="purpose-left">
                                    <h3>Our purpose is to support all Australians in achieving the best improvement in their hearing - by keeping it simple.</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="purpose-right">
                                    <p> We strive to develop a community of practice to address the stigmatism associated with being hearing impaired. It’s what we do, who we are and why we come to work every day.</p>
                                    <p>This is the primary reason why we have named our clinic Hearing Buddy - a partner with you throughout every step of the way.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="expect-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>What to Expect</h2>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="purpose-left">
                                    <h3>Our experience indicates that in relation to the topic of hearing health, Australians</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="purpose-right">
                                    <ul>
                                        <li>Feel pressured for time during appoinment</li>
                                        <li>More time is needed to comprehend hearing-related outcomes</li>
                                        <li>Need advice on how to take care of your devices?</li>
                                        <li>Become perplexed by an abundance of information, or a lack thereof</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="values-area">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Our Values</h2>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="purpose-left">
                                    <h3>At Hearing Buddy we aim to step out of what is considered normal and strive for a new normal fundamentally driven by our five values</h3>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-2 d-flex">
                                        <div class="value-box">
                                            <h4>Helpful</h4>
                                            <p>Passionate about providing a great client experience</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex">
                                        <div class="value-box">
                                            <h4>Simple</h4>
                                            <p>Inspired to keep it simple and easy</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex">
                                        <div class="value-box">
                                            <h4>Trust</h4>
                                            <p>Trusted to do the right thing</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex">
                                        <div class="value-box">
                                            <h4>Care</h4>
                                            <p>Bringing our family-owned background to life</p>
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex ">
                                        <div class="value-box">
                                            <h4>Advocacy</h4>
                                            <p>A partnership approach with our Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="experience-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>The Hearing Buddy Experience</h2>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/empoering-hearing-loss.png" title="" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>A Buddy that Empowers</h3>
                                        <p>“Tell me and I forget. Teach me and I remember. Involve me and I learn.”</p>
                                        <p>We create a safe environment and atmosphere for you to be comfortable enough to be involved, share, and learn.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="experience-section">
                    <div class="experience-area-odd">
                        <div class="row">
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container ">
                                        <h3>A Buddy that Empowers</h3>
                                        <p>“Tell me and I forget. Teach me and I remember. Involve me and I learn.”</p>
                                        <p>We create a safe environment and atmosphere for you to be comfortable enough to be involved, share, and learn.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/understands.png" title="" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="experience-section">
                    <div class="experience-area">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hands.png" title="" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 d-flex ">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container ">
                                        <h3>A Buddy that understands Your Investment</h3>
                                        <p>“Time is of a great value, and we believe the greatest gift you can give someone is your time”.</p>
                                        <p>We recognize learning anything new takes time and hence we don’t work with restrictive calendars and offer flexibility within appointment time limits.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="experience-section">
                    <div class="experience-area">
                        <div class="row">
                            <div class="col-md-9 d-flex ">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>A Buddy that Cares</h3>
                                        <p>“You are not a number to us”.</p>
                                        <p>Quality is critical to delivering on our service and creating a long-lasting relationship with you.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/buddy-empower.png" title="" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

    </main>

    <?php include_once "common/footer.php"; ?>

    <?php echo $sJSjQuery;
    echo $sPopper;
    echo $sJSBootStrap;
    echo $sJSEMM;
    ?>
</body>

</html>