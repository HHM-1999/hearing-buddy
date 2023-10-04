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
                    <h1>Signs of Hearing Loss</h1>
                </div>
            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-right">
                        <h3>Hearing loss may develop gradually over time or come unexpectedly and may be indicated by one or more symptoms. Here are a few signs to look out for if you suspect you have hearing loss:</h3>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/DifficultyHearinginBackgroundNoise185_187.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>Difficulty hearing in background noise:</h3>
                                        <p>You have difficulty hearing people in noisy environments such as restaurants, shopping centres etc.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">

                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>Difficulty following conversations: </h3>
                                        <p>Finding it difficult to hear or understand conversations with more than two people.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/DifficultyFollowingConversations185x187.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/PeopleSeemToMumble185x187.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>People seem to mumble:</h3>
                                        <p>Occasionally thinking others are mumbling or speaking too softly.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">

                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>Phone conversations are not clear: </h3>
                                        <p>You have trouble understanding people over the phone.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Phone-conversations185x187.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/TVIsTooLoud185x187.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>TV is too loud:</h3>
                                        <p>Frequently being told by family or friends that your TV is too loud.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">

                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>Avoid social settings:</h3>
                                        <p>You avoid social engagements due to communication issues or get tired easily after activities.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/AvoidingSocialSettings185x187.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/MisinterpretingSpeech185x187.webp" alt="">
                                </div>
                            </div>
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>Misinterpreting Speech:</h3>
                                        <p> You misinterpret speech and ask them to repeat themselves.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="experience-area pt-3">
                        <div class="row">
                        
                            <div class="col-md-9 d-flex">
                                <div class="brand-details align-items-stretch">
                                    <div class="details-container">
                                        <h3>Trouble Hearing from Distance:</h3>
                                        <p>It's hard to hear people from distance or when you can't see their faces.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex justify-content-center">
                                <div class="brand-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Phone-conversations185x187.webp" alt="">
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