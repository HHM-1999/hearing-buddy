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
                    <h1>Managing Tinnitus</h1>
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
                                    <li class="breadcrumb-item active"><a href="<?php echo $sSiteURL; ?>managing-tinnitus">Managing Tinnitus</a></li>
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
                                    <p>To put it simply, the best method to deal with tinnitus is to turn off the sound. We know that there is currently no FDA-approved medication to cure tinnitus, and controlled research have revealed that no drug, supplement, or herb is more beneficial than a placebo.</p>
                                    <p>The next best option to shutting off the sound is to ignore it.</p>
                                    <p>This is called ‘habituation,’ and it is the brain’s technique of reducing its reaction to repeated inputs (for example, sounds). Sound habituation is achieved by devaluing specific noises, such as tinnitus.</p>
                                    <p>The way you perceive a sound is heavily influenced by your associations and reactions to it. The good news is that the brain can learn to lessen the importance of noises that were previously perceived negatively.</p>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end">
                                <div class="purpose-left">
                                    <div class="tinnitud-img pb-3">
                                        <img class="img-fluid pt-0 " src="<?php echo $sSiteURL ?>/media/imgAll/bg/Tinnitus-Dr.-Hamid-Djalilian-1-553x553.jpg" alt="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="purpose-right">
                                    <p>Aside from addressing underlying issues (such as depression or insomnia), there are some excellent tools to help patients manage their condition; treatments that reduce the perceived intensity, omnipresence, and burden of tinnitus. These currently available treatments are not “cures” — they neither repair the underlying causes of tinnitus, nor eliminate the tinnitus signal in the brain. Instead, they address the attentional, emotional, and cognitive impact of tinnitus. They help patients live better, more fulfilling, and more productive lives, even if the perception of tinnitus remains.</p>
                                    <p><span><i>In order to find a strategy that works for you, you may need to experiment with a variety of methods listed below.</i></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="tinnitus-area">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>general-wellness">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/general_wellness.jpg" alt="">
                                    </div>
                                    <div class="service-detail-wrapper">
                                        <div class="service-details">
                                            <h3>General Wellness</h3>
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
                                <a href="<?php echo $sSiteURL; ?>hearing-aids-tinnitus">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-7.jpg" alt="">
                                    </div>
                                    <div class="service-detail-wrapper">
                                        <div class="service-details">
                                            <h3>Hearing Aids</h3>
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
                                <a href="<?php echo $sSiteURL; ?>sound-therapy">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/sound-therapy-2.jpg" alt="">
                                    </div>
                                    <div class="service-detail-wrapper">
                                        <div class="service-details">
                                            <h3>Sound Therapy</h3>
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
                                <a href="<?php echo $sSiteURL; ?>behavioural-therapies">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/begavioural_therapies.jpg" alt="">
                                    </div>
                                    <div class="service-detail-wrapper">
                                        <div class="service-details">
                                            <h3>Behavioural Therapies</h3>
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
                                <a href="<?php echo $sSiteURL; ?>drug-therapies">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/ototoxic-medications-2.jpg" alt="">
                                    </div>
                                    <div class="service-detail-wrapper">
                                        <div class="service-details">
                                            <h3>Drug Therapies</h3>
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
                                <a href="<?php echo $sSiteURL; ?>physiological-treatments">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/physiological_treatments.jpg" alt="">
                                    </div>
                                    <div class="service-detail-wrapper">
                                        <div class="service-details">
                                            <h3>Physiological Treatments</h3>
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