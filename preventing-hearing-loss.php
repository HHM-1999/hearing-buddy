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
                    <h1>Preventing Hearing Loss</h1>
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
                                    <p>Hearing loss is a widespread health concern, but fortunately, it is not inevitable. Noise- induced hearing loss can be prevented, while age-related hearing loss cannot. Limiting your exposure to loud noise is the most effective approach to prevent hearing loss, but there are additional lifestyle modifications that can further minimise your risk. Even if you suffer hearing loss or wear hearing aids, it is essential to safeguard your residual hearing to prevent further damage.</p>
                                    <p>Five preventative measures to avoid hearing loss: </p>
                                    <h3>1. Wear hearing protection</h3>
                                    <p>Wearing hearing protection is the most important healthy habit that can lower the chance of hearing loss. There are numerous varieties of hearing protection available, ranging from low-cost, low-tech noise cancelling devices to high-tech, high-end equipment. Explore our Custom earplugs section to see what we offer.</p>
                                    <a class="common-button btn text-center" href="<?php echo $sSiteURL ?>custom-ear-plugs">Custom Ear Plugs</a>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end ">
                                <div class="purpose-left">
                                    <div class="tinnitud-img">
                                        <img class="img-fluid pt-0" src="<?php echo $sSiteURL ?>/media/imgAll/bg/3_500x500.png" alt="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="purpose-right">
                                    <h3>2. Pay attention to medication side effects</h3>
                                    <p>In some instances, exposure to life-saving medications is worth the risk of hearing loss or tinnitus. However, known ototoxic medicines should be avoided where there is a safer and equally effective alternative. Contact your doctor immediately if you start a new medicine and notice changes in your hearing.</p>
                                    <h3>3.Manage your blood pressure and cardiovascular health</h3>
                                    <p> Diabetes and cardiovascular disease both raise the chance of hearing loss. This is because they inhibit healthy blood flow to the ears, which is essential for hearing. Controlling your blood pressure, taking your medications as prescribed, engaging in regular exercise, and eating a balanced diet will go a long way in this regard. Similarly, controlling your stress levels is also essential. </p>
                                    <h3>4. Quit smoking</h3>
                                    <p>Smoking harms the vascular system, which in turn impairs hearing. If the ears lack a sufficient supply of oxygen-rich blood, they are more susceptible to harm.</p>
                                    <h3>5.Get a hearing test</h3>
                                    <p>Some causes of hearing loss are preventable and taking charge of your hearing health is the first step. Obtaining a baseline hearing evaluation is the initial step. This allows you to monitor your hearing over time, even if you have not yet experienced hearing loss symptoms. If your hearing test reveals that you have hearing loss, you can take steps to prevent it from worsening and treat it. At Hearing Buddy, we analyse the results with you and provide recommendations for improving your hearing health. Whether this involves hearing aids, alternative treatment choices, or preventive measures, you are on the path to an improved quality of life.</p>
                                    <a class="common-button btn text-center pt-2" href="<?php echo $sSiteURL ?>contact">Book Appointment</a>

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