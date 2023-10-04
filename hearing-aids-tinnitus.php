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
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="purpose-right">
                                        <h3>Hearing loss is almost always a factor in the development of tinnitus. Tinnitus can be alleviated by enhancing one's ability to hear and perceive external noise. Looking for Hearing Aids?</h3>
                                        <p>Tinnitus is most commonly a symptom of hearing loss brought on by ageing, long-term damage to the auditory system, or an acute trauma to the system. Hearing loss reduces the amount of information the brain receives from outside sound. A neuroplastic shift occurs in the brain’s ability to process different sound frequencies. Tinnitus is the end result of these maladaptive neuroplastic changes.</p>
                                        <p>Amplification devices can help patients with hearing loss and tinnitus, such as hearing aids. They help people who have hearing loss to communicate more clearly.</p>
                                        <p>The following is a list of suggestions for tinnitus patients who want to improve their overall well-being.</p>
                                        <p>Hearing aids are beneficial for a variety of reasons:</p>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-end align-items-center ">
                                <div class="purpose-right  ">
                                    <div class="tinnitud-img pt-0">
                                    <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-aids-9-632x632.jpg" class="img-fluid ">
                                    </div>
                                </div>
                                    
                                </div>
                                <div class="col-md-12 pt-3">
                                    
                                    <div class="purpose-right">
                                        <p><span>Effects of Masking and Attenuation:</span>There are specific hearing aid programmes designed to drown out the sound of tinnitus. Hearing aids with this tinnitus feature augment the volume of external noise to the point that it masks the sound of tinnitus. This makes it more difficult to notice tinnitus consciously and assists the brain in focusing on external, ambient noises. Hearing aids have a greater masking effect on people who have hearing loss in the same frequency range as their tinnitus.</p>
                                        <p><span>Auditory Stimulation:</span>The quantity of auditory stimulation that the brain receives rises in direct proportion to the level of external noise. The auditory circuits in the brain may benefit from being stimulated by soft background sounds that are otherwise not heard.</p>
                                        <p><span>Enhanced Communication:</span>Patients with loud tinnitus may find it difficult — or perhaps impossible — to engage in everyday communication and social activities such as following a conversation, conversing on the phone, watching television, or listening to the radio. Hearing aids assist by increasing the external volume of these activities above the volume of tinnitus felt. Patients may experience less personal frustration and social isolation as a result.</p>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-aid-specialist-in-adelaide-near-me-1.webp" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Choosing a Hearing Aid</h3>
                                                    <p>Hearing aids are likely to be beneficial if you are experiencing hearing loss. However, selecting the best option is not a simple task. Because hearing aids are customised, not every brand, style, or level of technology is suitable for every individual. Even two individuals with….</p>
                                                        <a class="common-button btn" href="90-minute-initial-comprehensive.php">Find Out More</a>
                                                    </div>
                                                </div>
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