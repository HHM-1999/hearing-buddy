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
                    <h1>Tinnitus Assessment</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>services">Our Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>tinnitus-assessment">Tinnitus Assessment</a></li>
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
                        <h2>$200</h2>
                    </div>
                </div>
            </div>
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="know-details">
                                    <p>Do you (or a loved one) experiencing a ringing in ears that no one else can hear? If so, you are not alone.</p>
                                    <p>Even while it’s alarming the first time you notice Tinnitus, it’s not usually a sign of something more serious. If your symptoms persist for more than a week or are interfering with your ability to concentrate, sleep, or relax, make an appointment with your doctor or a Hearing Buddy expert in your area.</p>
                                    <p>Hearing Buddy provides a Comprehensive Tinnitus Assessment and specialised services in Tinnitus Management in addition to a Comprehensive Hearing Assessment.</p>
                                    <p>We do a thorough examination of your medical history and administer a battery of tests to determine the root of the problem. This will assist you in determining the reasons of your tinnitus and will also provide you with strategies for managing your tinnitus. If hearing loss is present, we can offer you a variety of hearing aids that can assist in managing your tinnitus, address your hearing loss, and fit your lifestyle. Even if your hearing is normal, we can discuss ways to manage your tinnitus or refer you to other professionals, depending on your circumstances.</p>
                                    <p>There is no cure for tinnitus, but fortunately, it can be managed. There are specific hearing aid programmes designed to drown out the sound of tinnitus. Hearing aids with this tinnitus feature augment the volume of external noise to the point that it masks the sound of tinnitus. This makes it more difficult to consciously perceive tinnitus and helps the brain focus on outside, ambient noises. The masking impact of hearing aids is particularly strong for patients who have hearing loss in the same frequency range as their tinnitus.</p>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-end">
                                <div class="know-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/tinnitus_assessment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="accordion-area-choose">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/heroBg6.webp" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Want to get started on the road to successful tinnitus management?</h3>
                                                    <p class="pt-3">Connect with your Hearing Buddy Today.</p>
                                                    <a href="<?php echo $sSiteURL; ?>contact" class="common-button btn " alt="Book An Appointment Now " title="Book An Appointment Now ">Book An Appointment Now </a>
                                                    <p class="pt-3">To find out more about Tinnitus and what can you do about it click below.</p>
                                                    <a href="<?php echo $sSiteURL; ?>tinnitus-management" class="common-button btn" alt="Tinnitus Management" title="Tinnitus Management">Tinnitus Management</a>

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