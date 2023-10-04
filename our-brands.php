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
                    <h1>Our Brands</h1>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/logo-phonak2-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Phonak</h3>
                                            <p>Phonak has been committed to developing, producing, and distributing life-changing hearing solutions for more than 70 years. Take a look at some of the milestones and innovations in Phonak history.</p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.phonak.com/en-au">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Oticon</h3>
                                            <p>Oticon’s mission began over 100 years ago. In 1904, Hans Demant wanted to help his wife Camilla live a better life, unhindered by her hearing loss. Hans helped Camilla with one of the first electronic hearing aids in the world. From this foundation of care, Oticon grew with a passion to help people who need hearing support.</p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.oticon.com.au/hearing-aid-users">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-buddy-brands-in-australia-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-buddy-australia-unitron-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Unitron</h3>
                                            <p>Unitron is a Canadian hearing aid manufacturer with worldwide operations headquartered in Waterloo Region, Canada. Originally founded in 1964, we’re proud of our legacy of excellence and commitment to outstanding product performance, design, and customer satisfaction.</p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.unitron.com/global/en_us.html">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Bernafon</h3>
                                            <p>Bernafon is a global hearing healthcare company that is empowering people to hear and communicate better. We market high-performance hearing solutions by combining leading hearing technology with more than 70 years of company know-how in the industry. </p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.bernafon.com.au/hearing-aid-users">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/bernafon-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Widex-1-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Widex</h3>
                                            <h2>A 65 YEAR JOURNEY FUELLED BY A PASSION FOR SOUND</h2>
                                            <p>Phonak has been committed to developing, producing, and distributing life-changing hearing solutions for more than 70 years. Take a look at some of the milestones and innovations in Phonak history.</p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.widex.com/en-au/">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Starkey</h3>
                                            <h2>Hearing is key to our health and happiness</h2>
                                            <p>Bernafon is a global hearing healthcare company that is empowering people to hear and communicate better. We market high-performance hearing solutions by combining leading hearing technology with more than 70 years of company know-how in the industry. </p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.starkey.com.au/">Visit Website</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/starkey-hearing-buddy-brands-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="brand-area">
                            <div class="row">
                                <div class="col-md-3 d-flex">
                                    <div class="brand-img align-items-stretch">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/signia-hearing-buddy-150x150.jpg" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <h3>Signia</h3>
                                            <h2>Hearing every word, beat, and breath.</h2>
                                            <p>Signia is one of the leading hearing aid brands in the world. Our goal is to enhance human performance through iconic innovations that shape the prescription audio category. We refuse to accept hearing loss as a limitation.</p>
                                            <div class="see-more">
                                                <a class="common-button btn" href="https://www.signia.net/en-au/">Visit Website</a>
                                            </div>
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