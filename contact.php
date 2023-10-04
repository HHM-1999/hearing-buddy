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
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="location-container">
                            <div class="location-card">
                                <div class="flip-card-front">
                                    <div class="servCard">
                                        <div class="head">
                                            <h4>DULWICH</h4>
                                            <h4>Monday - Friday</h4>
                                            <h2>9am-5pm</h2>
                                        </div>
                                        <div class="body">
                                            <p>63 Dulwich Ave. Dulwich SA 5065</p>
                                            <p>Wheelchair accessible <i class="fas fa-wheelchair"></i></p>
                                            <p>Parking- 2hr free parking available at medical centre on opposite side.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.8701150909883!2d138.62906671486297!3d-34.93479428259705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0ceadd4f2addf%3A0x436f2d19425bec2a!2s63%20Dulwich%20Ave%2C%20Dulwich%20SA%205065%2C%20Australia!5e0!3m2!1sen!2sbd!4v1679121692692!5m2!1sen!2sbd" width="380" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="location-container">
                            <div class="location-card">
                                <div class="flip-card-front">
                                    <div class="servCard">
                                        <div class="head">
                                            <h4>TORRENSVILLE</h4>
                                            <h4>Wednesday</h4>
                                            <h2>9am-5pm</h2>
                                            <p>By Appointments Only</p>
                                        </div>
                                        <div class="body">
                                            <p>63 Dulwich Ave. Dulwich SA 5065</p>
                                            <p>2 Ashwin Pde. Torrensville SA 5031</p>
                                            <p>Wheelchair accessible <i class="fas fa-wheelchair"></i></p>
                                            <p>3hr Free Parking available</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.687733000238!2d138.5618639148623!3d-34.914285181502855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ab0cf5a333196f1%3A0x990df0dc1efbeea8!2sBrickworks%20Medical%20Centre!5e0!3m2!1sen!2sbd!4v1678862506434!5m2!1sen!2sbd" width="380" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="location-container">
                            <div class="location-card">
                                <div class="flip-card-front">
                                    <div class="servCard">
                                        <div class="head">
                                            <h4>DULWICH</h4>
                                            <h4>Monday - Friday</h4>
                                            <h2>9am-5pm</h2>
                                        </div>
                                        <div class="body">
                                            <p>63 Dulwich Ave. Dulwich SA 5065</p>
                                            <p>Wheelchair accessible <i class="fas fa-wheelchair"></i></p>
                                            <p>Parking- 2hr free parking available at medical centre on opposite side.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flip-card-back">
                                    <div class="servCard">
                                        <div class="head">
                                            <h4>DULWICH</h4>
                                            <h4>Monday - Friday</h4>
                                            <h2>9am-5pm</h2>
                                        </div>
                                        <div class="body">
                                            <p>63 Dulwich Ave. Dulwich SA 5065</p>
                                            <p>Wheelchair accessible <i class="fas fa-wheelchair"></i></p>
                                            <p>Parking- 2hr free parking available at medical centre on opposite side.</p>
                                        </div>
                                    </div>
                                </div>
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