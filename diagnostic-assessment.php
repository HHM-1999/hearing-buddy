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
                    <h1>Diagnostic Assessment</h1>

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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>diagnostic-assessment">Diagnostic Assessment</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="heading">
                        <h2>$100</h2>
                    </div>
                </div>
            </div>
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="purpose-right">
                                        <p>Have you been referred by your doctor for medical evaluation of your hearing? A thorough medical report is sent back to the referring doctor following this appointment.</p>
                                        <p>To better understand your medical history, we’ll sit down with you for a conversation.Your ears will be examined to make sure there aren’t any visible medical problems. A full battery of tests on your auditory system will be done to see if there are any anomalies that warrant further investigation.</p>
                                        <p>Our qualified specialists will evaluate the test results and give you with an audiological diagnosis report that will include the following information:</p>
                                        <ul>
                                            <li>The severity of the hearing loss (mild, moderate, severe or profound).</li>
                                            <li>The nature of the hearing loss (conductive, sensorineural or mixed).</li>
                                            <li>The acoustic configuration of the hearing loss (the range of sounds affected).</li>
                                            <li>Location of lesion (peripheral, central, outer ear, middle ear, inner ear, neural, central).</li>
                                        </ul>
                                        



                                    </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-end align-items-center ">
                                    <div class="purpose-right  ">
                                        <div class="tinnitud-img pt-0">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/oto_hearing-assessment_linkspot-300x300.jpg" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <p class="pb-3">The audiological evaluation will assist in determining your future steps, which may include the following:</p>
                                        <ul>
                                            <li>A referral to a medical specialist may be required.</li>
                                            <li>Potentially beneficial audiological treatment alternatives (hearing aids, implantable devices, communication training, counselling, or a combination of these).</li>
                                            <li>Anticipated limits of any treatment programme and strategies for overcoming them (through family involvement, for example)</li>
                                        
                                        </ul>
                                        <p class="pb-3">Are you ready to connect with your Hearing Buddy?</p>

                                        <a href="<?php echo $sSiteURL; ?>contact" class="common-button btn" alt="Book An Appointment Now" title="Book An Appointment Now">Book An Appointment Now</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--  -->
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