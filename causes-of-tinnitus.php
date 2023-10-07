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
                    <h1>Causes Of Tinnitus</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>tinnitus-management">Tinnitus Management</a></li>
                                <li class="breadcrumb-item active"><a href="<?php echo $sSiteURL; ?>causes-of-tinnitus">Causes Of Tinnitus</a></li>
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
                    <div class="purpose-wrapper">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="purpose-right">
                                    <p>Tinnitus is not a disease in and of itself; it can be associated with a variety of underlying health conditions, but the exact cause of the increased nerve cell activity that causes it is yet unknown.</p>
                                    <p>Tinnitus is typically a sensorineural response of the brain to ear and auditory system injury. While tinnitus is frequently related with hearing loss, it is a symptom of around 200 other health conditions. The following is a list of some of the most often reported tinnitus causes.</p>
                                    <p><i>Important note: Tinnitus alone does not necessarily imply any of the following conditions. Tinnitus patients need to consult their doctor or hearing health professional to determine the root cause of their symptoms. Resolving the underlying source of tinnitus can sometimes alleviate its perception.</i></p>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end">
                                <div class="purpose-left">
                                    <div class="tinnitud-img">
                                        <img class="img-fluid pt-0" src="<?php echo $sSiteURL ?>/media/imgAll/bg/Tinnitus-Dr.-Hamid-Djalilian-1-553x553.jpg" alt="" title="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="tinnitus-area">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="servcie-wrapper">
                                    <a href="<?php echo $sSiteURL ?>hearing-loss">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/loss.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Hearing Loss</h3>
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
                                    <a href="<?php echo $sSiteURL ?>obstructions-middle-ear">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/obstruction-2.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Obstructions in the Middle Ear</h3>
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
                                    <a href="<?php echo $sSiteURL ?>head-and-neck-trauma">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/trauma-2.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Head and Neck Trauma</h3>
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
                                    <a href="<?php echo $sSiteURL ?>temporomandibular-joint-disorder">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/temporomandibular-joint-disorders-2.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Temporomandibular Joint Disorder</h3>
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
                                    <a href="<?php echo $sSiteURL ?>sinus-pressure-and-barometric-trauma">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/woman_sinus_cavity-dark.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Sinus Pressure and Barometric Trauma</h3>
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
                                    <a href="<?php echo $sSiteURL ?>traumatic-brain-injury">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/trumatic_brain_injury.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Traumatic Brain Injury (TBI)</h3>
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
                                    <a href="<?php echo $sSiteURL ?>ototoxic-drugs">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/ototoxic-medications-2.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Ototoxic Drugs</h3>
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
                                    <a href="<?php echo $sSiteURL; ?>other-diseases-&-medical-conditions">
                                        <div class="service-img">
                                            <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/comprehensive_hearing_assessment.jpg" alt="">
                                        </div>
                                        <div class="service-detail-wrapper">
                                            <div class="service-details">
                                                <h3>Other Diseases & Medical Conditions</h3>
                                            </div>
                                            <div class="goto-icon">
                                                <i class="fas fa-arrow-right"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                </section>
                <!--  -->
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