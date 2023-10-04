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
                    <h1>Drug Therapies</h1>
                </div>
            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-9 pt-3">
                                    <div class="purpose-right">
                                        <p>The FDA has no approved medication for the treatment of tinnitus, and no medication has been shown to reverse the neuronal hyperactivity that is the core cause of tinnitus. Tinnitus can’t be cured with medication; however it may provide relief from some severe tinnitus symptoms.</p>
                                        <p>Patients should seek the advice of their healthcare experts in order to determine which medications are most suited to their needs. Not all medications work or are appropriate for everyone. Any new drug can have undesirable side effects and/or work in opposition to currently prescribed medications.</p>
                                        
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="purpose-right  ">
                                        <div class="tinnitud-img pt-0">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/jobs-in-dorset-1255x837-1-683x683.jpg" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                    <h3>Antidepressants and Antianxiety Drugs</h3>
                                    <p>The most common tinnitus treatments are psychoactive pharmaceuticals that address tinnitus-related behavioural disorders. These medications can help reduce tinnitus-related stress, anxiety, and depression. It is also plausible that psychoactive medications may make tinnitus less obvious for some patients due to the loop interaction between unpleasant emotions and tinnitus (tinnitus causes anxiety, which makes tinnitus worse, which causes more anxiety).</p>
                                    <h3>Mindfulness-Based Stress Reduction (MBSR)</h3>
                                    <p>Mindfulness-based therapy focuses on acute and nonjudgmental awareness of one’s bodily, sensory, emotional, and cognitive processes. Rather than trying to ignore tinnitus, MBSR teaches patients to accept, embrace, and control it. So, sufferers can better manage their condition. It can also address negative feelings of anger and apathy that so often accompany tinnitus.</p>
                                    <h3>Over the Counter Drugs and Supplements</h3>
                                    <p>Numerous OTC medications (pills, powders, herbs, and drops, for example) are falsely promoted as “tinnitus remedies” and even “miracle cures.” There is no credible scientific proof that these products — or any of their constituents — have any effect on tinnitus. While these products may have anecdotal success stories, any observed improvements are almost certainly due to a short-term placebo effect. Patients should exercise caution when purchasing these items because they are not fully regulated by the FDA for safety and have no scientifically measurable benefit.</p>
                                    
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