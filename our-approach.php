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
                    <h1>Our Approach</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>services">Our Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>our-approach">Our Approach</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="approach-heading">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Our 5 Step Approach to Successful Outcomes</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="timeline-area">
            <div class="container-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-timeline">
                            <!--1st section-->
                            <div class="timeline_item">
                                <div class="date-content order_1b">
                                    <div class="date-outer">
                                        <span class="date">
                                            <p class="year">Step 1</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="icon order_2b"></div>
                                <div class="timeline-content order_3b col-md">
                                    <p class="title">An informal professionalism:</p>
                                    <p class="description">
                                        A long standing relationship starts with a good conversation. We are interested in listening to everything from what you had for breakfast, your journey and of course most importantly – your hearing needs and current hearing related problems.
                                    </p>
                                </div>
                            </div>
                            <!--1st section-->
                            <!--2nd section-->
                            <div class="timeline_item">
                                <div class="date-content order_1">
                                    <div class="date-outer">
                                        <span class="date">
                                            <p class="year">Step 2</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="icon order_2"></div>
                                <div class="timeline-content order_3 col-md">
                                    <p class="title">Accurate Diagnosis:</p>
                                    <p class="description">
                                        There are many reasons why a correct diagnosis is so important when it comes to diagnosing hearing loss or repairing your hearing aids. Your hearing or hearing aid-related concerns will be the subject of a joint evaluation by us and you. Every step of the way, you can rely on us to explain everything that’s going on and what’s coming up next.
                                    </p>
                                </div>
                            </div>
                            <!--2nd section-->
                            <!--3rd section-->
                            <div class="timeline_item">
                                <div class="date-content order_1b">
                                    <div class="date-outer">
                                        <span class="date">
                                            <p class="year">Step 3</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="icon order_2b"></div>
                                <div class="timeline-content order_3b col-md">
                                    <p class="title">Explaining Findings:</p>
                                    <p class="description">
                                        Empowerment has nothing to do with our knowledge of your hearing loss as it is not about us. It all boils down to how well you understand your hearing and hearing loss. Our all-inclusive approach makes it simpler for you to understand your hearing and the possible outcomes.
                                    </p>
                                </div>
                            </div>
                            <!--3rd section-->
                            <!-- 4th -->
                            <div class="timeline_item">
                                <div class="date-content order_1">
                                    <div class="date-outer">
                                        <span class="date">
                                            <p class="year">Step 4</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="icon order_2"></div>
                                <div class="timeline-content order_3 col-md">
                                    <p class="title">Personalised Solutions:</p>
                                    <p class="description">
                                        There are many reasons why a correct diagnosis is so important when it comes to diagnosing hearing loss or repairing your hearing aids. Your hearing or hearing aid-related concerns will be the subject of a joint evaluation by us and you. Every step of the way, you can rely on us to explain everything that’s going on and what’s coming up next.
                                    </p>
                                    <p class="description">Our approach is to make the complex simple, and the simple – compelling</p>
                                </div>
                            </div>
                            <!-- 4th end -->
                            <!-- 5th  -->
                            <div class="timeline_item">
                                <div class="date-content order_1b">
                                    <div class="date-outer">
                                        <span class="date">
                                            <p class="year">Step 5</p>
                                        </span>
                                    </div>
                                </div>
                                <div class="icon order_2b"></div>
                                <div class="timeline-content order_3b col-md">
                                    <p class="title">Ongoing Care:</p>
                                    <p class="description">
                                        Communication is said to be the foundation of relationships, and our commitment to cultivating relationships and trust plays a key role in our growth and efficiency. Hearing Buddy considers itself to be a partner in the search for a solution to your hearing loss, and our relationship with you extends beyond the initial appointment. Consequently, we provide unlimited follow-up during your first 60 days of receiving hearing aids, schedule 6 to 12 monthly recalls, and arrange end of warranty recalls for all our clients in order to provide exceptional care and ensure that you maintain the highest possible level of hearing throughout your journey with us.
                                    </p>
                                </div>
                            </div>
                            <!-- 5th end  -->
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