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
                    <h1>Types of Tinnitus</h1>
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
                                        <h3>The Four Different Types of Tinnitus:</h3>
                                        <p><span>1. Subjective Tinnitus:</span> The most prevalent type of tinnitus. Subjective symptoms that are heard by the affected individual are typically induced by excessive noise exposure. This type of tinnitus can arise and fade abruptly, lasting between three and twelve months at a time. It may never end in some severe cases.</h3>
                                        <p><span>2. Neurological Tinnitus:</span> Usually caused by a disorder, such as Meniere’s disease, that primarily affects the brain’s auditory functions.</p>
                                        <p><span>3.Somatic Tinnitus</span>: Related to the sensory system. Somatic tinnitus is a type of tinnitus that is typically related to physical movement and touch. It can be generated by muscle spasms in the ear or neck, and by other mechanical sources.</p>
                                        <p><span>4.Objective Tinnitus:</span> A rare type of tinnitus that accounts for fewer than 1% of all cases, it is thought to be caused by involuntary muscle contractions or vascular abnormalities. When the underlying reason is addressed, the tinnitus usually resolves completely. This is the only type of tinnitus that an outside observer can hear, and it is the only variety that has the possibility for a permanent cure.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    <div class="purpose-left">
                                        <div class="know-img">
                                            <img class="img-fluid pt-0" src="<?php echo $sSiteURL ?>/media/imgAll/bg/tinnitus-signs-symptoms-and-treatment-options-1-443x443.jpg" alt="" title="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p><span>5.Some Subtypes of Tinnitus:</span></p>
                                        <ul>
                                            <li><span>Musical Tinnitus: </span>Also called musical hallucinations or auditory imagery, this type is less common. Simple tones or layers of tones come together to recreate a melody or composition. Musical tinnitus tends to occur in people who have had hearing loss and tinnitus for some time, though people with normal hearing or increased sensitivity to sound can also have musical hallucinations.</li>

                                            <li> <span>Pulsatile Tinnitus:</span> A rare type of tinnitus that sounds like a rhythmic pulsing in the ear, usually in time with your heartbeat. A doctor may be able to hear it by pressing a stethoscope against your neck or by placing a tiny microphone inside the ear canal. This kind of tinnitus is most often caused by problems with blood flow in the head or neck. Pulsatile tinnitus also may be caused by brain tumours or abnormalities in brain structure.</li>
                                            <li><span>Low-frequency Tinnitus:</span> Perhaps the most confusing type of tinnitus because sufferers aren’t sure whether the sound is being produced internally or externally. Often, the tones correspond to the two lowest octaves on a piano and are described as a humming, murmuring, rumbling, or deep droning. This type of noise seems to affect people most strongly.</li>
                                        </ul>
                                    </div>
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