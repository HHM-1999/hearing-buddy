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
                    <h1>Independent and Proudly SA Owned</h1>
                </div>
            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="purpose-right">
                                        <p>We are proud to be one of the few clinics in South Australia that is not owned by a hearing aid manufacturer. This assures unbiased advice relating to your hearing health including the most suitable device to meet your needs and budget. We work with you to explore various hearing aids from the world’s most renowned manufacturers to arrive at a solution that suits you and most importantly – your lifestyle.</p>
                                        <p>Most well-known hearing aid clinics are owned by or are closely associated with hearing aid manufacturers. Like many other industries, they are pursuing vertical integration by creating their own storefronts to sell their products directly to consumers. As a result of this mindset, corporate suppliers have built their businesses on the idea that staff always have some pressure to promote a particular product line and must outperform sales targets in order to receive incentives or earn commissions. Some clinics also pay health funds commissions for each hearing aid that is fitted to a fund member.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    <div class="purpose-left">
                                        <div class="know-img">
                                            <img class="img-fluid" src="<?php echo $sSiteURL ?>/media/imgAll/bg/ADELAID-680x680.jpg" alt="Australian Government Hearing Services Program" title="Australian Government Hearing Services Program">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>As these clinics only fit hearing aids manufactured by their affiliated manufacturers therefore this significantly restricts your options, as you are only purchasing one brand. This does not necessarily indicate that the brand or devices provided will be ineffective; it just implies that there is no real choice available.</p>
                                        <p>Hearing Buddy is accredited by the Hearing Services Program to provide free hearing services to eligible Pensioners and Veterans. As a government-accredited provider of hearing services, we are governed by a regulatory framework, and we are pleased to be a member of the Commonwealth’s Hearing Services programme and strive to achieve the best possible outcomes for all our clients.</p>
                                        <p>Our independence means we aren’t bound to any brand or style of hearing device, so we can recommend the right hearing solution for your needs.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Want To Find Out WHO OWNS WHO? </h2>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="purpose-wrapper">
                                <div class="purpose-right">
                                    <h3>International Companies with retail chains in Australia include:</h3>
                                    <p><span>COSTCO</span> – from the United States</p>
                                    <p><span>SpecSavers</span> – from the United Kingdom</p>
                                    <p><span>Amplifon</span> – Is an Italian Company Who Owns</p>
                                    <p><span>Retail Clinics</span>: AMPLIFON, BAY AUDIO, ATTUNE HEARING</p>
                                    <p><span>Hearing Devices</span>: Sells REBRANDED devices from other manufacturers. They don’t manufacture own devices.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-flex">
                            <div class="purpose-wrapper w-100">
                                <div class="purpose-right">
                                    <h3>Manufacture owned chains include:</h3>
                                    <p><span>Retail Clinics</span>: AUDIKA</p>
                                    <p><span>Hearing Devices</span> : OTICON, BERNAFON, SONIC</p>
                                    <p><span>WS Audiology</span> – Danish Company Owns</p>
                                    <p><span>Retail Clinics</span>: BLOOM HEARING SPECIALISTS</p>
                                    <p><span>Hearing Devices:</span> WIDEX, SIGNIA, REXTON</p>
                                    <p><span>Sonova</span> – Swiss Company Owns</p>
                                    <p><span>Retail Clinics</span>: CONNECT HEARING, BLAMEY SAUNDERS</p>
                                    <p><span>Hearing Devices</span>: PHONAK, UNITRON</p>
                                    <p><span>Starkey Hearing Technologies</span> – American Company Owns</p>
                                    <p><span>Retail Clinics</span>: iHEAR</p>
                                    <p><span>Hearing Devices:</span> STARKEY</p>
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