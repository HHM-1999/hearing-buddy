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
                    <h1>Hearing Health</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>hearing-health">Hearing Health</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Did You Know ?</h2>
                    </div>
                </div>
            </div>
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="know-details">
                                    <p>Hearing loss affects individuals of all ages and is more prevalent than one might assume. According to the World Health Organization (WHO), at least 360 million individuals are affected by hearing loss, and that’s just the number of documented cases. Currently, one in six Australians suffers from some sort of hearing loss, and this proportion is expected to climb dramatically! It is anticipated that by 2050, one in four Australians will have a hearing impairment.</p>
                                    <p>Hearing loss that goes untreated can have a detrimental influence on your social and emotional well-being as well as your ability to interpret speech. Deterioration in quality of life is common among those with hearing loss. While hearing loss can be upsetting for those of us who suffer from it, it is also a constant in our lives—we live with it from the time we wake up to the moment we fall asleep—we adapt. It’s a lonely challenge, but it’s ours.</p>
                                    <p>It is essential to understand that you are not alone and have access to several options if you suffer hearing loss. Millions of people suffer from hearing loss, but it does not mean that you will be socially isolated as a result of your condition. You’ve taken the first step in obtaining the information and assistance you require by searching for it on our site.</p>
                                    <p>If you suspect hearing impairment, you’ve come to the correct place! Learn the common causes, symptoms, and types of hearing loss so that you know when to seek assistance for yourself and your loved ones.</p>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-end">
                                <div class="know-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Hearing-aid-fitting-Discussion-575x575.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="questions">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>hearing-loss">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/loss.png" alt="">
                                    </div>
                                    <div class="service-details-wrapper">
                                        <div class="service-details">
                                            <h3>What Causes Hearing Loss?</h3>
                                        </div>
                                        <div class="goto-icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>types-of-hearing-loss">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/diagnostic_assessment.jpg" alt="">
                                    </div>
                                    <div class="service-details-wrapper">
                                        <div class="service-details">
                                            <h3>Types Of Hearing Loss</h3>
                                        </div>
                                        <div class="goto-icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>signs-of-hearing-loss">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/causes-of-tinitius2.jpg" alt="">
                                    </div>
                                    <div class="service-details-wrapper">
                                        <div class="service-details">
                                            <h3>Signs Of Hearing Loss</h3>
                                        </div>
                                        <div class="goto-icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>treatment-option">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/managin-tinitus.jpg" alt="">
                                    </div>
                                    <div class="service-details-wrapper">
                                        <div class="service-details">
                                            <h3>Treatment Options for Hearing Loss</h3>
                                        </div>
                                        <div class="goto-icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>how-hearing-aids-can-help">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/HEARING-BUDDY-EMPOWERS-grey.jpg" alt="">
                                    </div>
                                    <div class="service-details-wrapper">
                                        <div class="service-details">
                                            <h3>How Hearing Aids Can Help?</h3>
                                        </div>
                                        <div class="goto-icon">
                                            <i class="fas fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>preventing-hearing-loss">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/online_hearing_test.jpg" alt="">
                                    </div>
                                    <div class="service-details-wrapper">
                                        <div class="service-details">
                                            <h3>Preventing Hearing Loss</h3>
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
            </div>
            <div class="help-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="help-desc">
                                <h3>How can we help?</h3>
                                <p>If you suspect you or a loved one suffers from hearing loss, don’t delay, and seek support immediately. A baseline hearing test, appropriate treatment options, and minor lifestyle adjustments can result in significant improvements to your hearing health. Schedule an appointment with Hearing Buddy and take the first step towards a lifetime of improved hearing.</p>
                                <div class="see-more">
                                    <a class="common-button btn text-center" href="<?php echo $sSiteURL; ?>contact">Find Out More</a>
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