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
                    <h1>Hearing Aids</h1>
                </div>
            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>What Is a Hearing Aid?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>When hearing loss cannot be corrected medically or surgically, hearing aids are the only option. They are small electronic devices that can be highly customised to treat a variety of hearing impairments. Most commonly hearing aids are prescribed treatment option for hearing loss, especially when it’s age-related or noise-induced hearing loss. They won’t return your hearing to normal, but they’ll help you hear better in quiet and noisy environments.</p>
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
                                    <h2>How Hearing Aid works?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="purpose-left">
                                        <h3>Hearing aids have three basic components:</h3>
                                        <ol>
                                            <li> A microphone to detect sounds</li>
                                            <li>a processor (essentially a little computer) that determines which sounds to enhance</li>
                                            <li>a receiver that sits in the ear to deliver the amplified sounds. They are either powered by disposable or rechargeable batteries.</li>
                                        </ol>
                                        <div class="purpose-right">
                                            <p>Hearing aids are custom-fitted and designed to enhance sounds in response to a person’s specific hearing impairment. For instance, if a person has difficulty hearing high-pitched sounds, the hearing aid will magnify those sounds more (and to a very specific degree). In many instances, the wearer can also alter the hearing aids via an app and add unique custom settings if they desire greater control over the amplification.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="video-frame">
                                        <iframe width="581" height="327" src="https://www.youtube.com/embed/AxzVyMcmRcs" title="How Do Hearing Aids Work Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="values-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>What’s the Best Brand of Hearing Aids?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>To dispel a frequent myth, it is essential to realise that every hearing aid manufacturer annually invests hundreds of millions of dollars in research and development (R&D) to build the most advanced technologies. Because wearing hearing aids is a subjective experience, there is no research that definitively indicates that one brand is superior to others.</p>
                                        <p>Due to the fact that individuals’ sound perception is so varied, a hearing aid that excites one person may not impress another, even if they have identical hearing test results. This level of variety makes it nearly impossible to evaluate hearing aid models and brands.</p>
                                        <p>Todd Ricketts, PhD, a prominent hearing aid researcher and professor at Vanderbilt University, explains, “There are differences across brands, but they are not big enough to choose the best brands.”</p>
                                        <p>As a marketing ploy, certain hearing aid clinics may assert that their technology is “the finest,” although in reality, all hearing aid manufacturers offer excellent options.</p>
                                        <p>So how should you choose a hearing aid for yourself and what factors do you need to consider?</p>
                                        <div class="see-more">
                                            <a class="common-button btn" href="<?php echo $sSiteURL; ?>choosing-a-hearing-aid">Choosing a Hearing Aid</a>
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