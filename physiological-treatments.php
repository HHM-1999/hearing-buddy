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
                    <h1>Physiological Treatments</h1>
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
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>tinnitus-management">Tinnitus Management</a></li>
                                    <li class="breadcrumb-item"><a href="<?php echo $sSiteURL; ?>managing-tinnitus">Managing Tinnitus</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>physiological-treatments">Physiological Treatments</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
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
                                        <p>Tinnitus is a phantom auditory experience formed by the brain in reaction to the absence of acoustic stimulus in the vast majority of instances. Tinnitus symptoms, on the other hand, might be caused by physical dysfunctions elsewhere in the body.</p>
                                        <p>The term “peripheral tinnitus” refers to circumstances when the underlying cause of the tinnitus is not “centralised” in the brain, but rather occurs in the peripheral nervous system. It is possible to treat peripheral tinnitus by dealing with the cause of the tinnitus itself.</p>
                                        <p>Only a small percentage of all tinnitus cases are affected by these factors (and possible treatments). Most healthcare professionals have the ability to identify and treat the following conditions.</p>
                                        
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="purpose-right  ">
                                        <div class="tinnitud-img pt-0">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/audiometrist-vs-audiologist-753x753.jpg" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                    <h3>TMJ Dysfunction</h3>
                                    <p>If a dysfunction of the temporomandibular joint (TMJ) is the source of your tinnitus, you may find relief through dental therapy or bite realignment. This issue can be identified and treated by a dentist.</p>
                                    <h3>Obstruction In Ear</h3>
                                    <p>Earwax buildup, a loose hair, or any other thing that comes into touch with the eardrum can induce Ear Tinnitus. A health professional’s removal of the object may help reduce the symptoms you are experiencing.</p>
                                    <h3>Head and Neck Injury</h3>
                                    <p>Somatic tinnitus can arise from a severe head or neck injury that affects nerve, blood supply, and muscle function. Tinnitus symptoms may be alleviated if the underlying physical trauma is treated with drugs, osteopathy, physical therapy, or chiropracty. surgical procedures, such as a neurectomy or microvascular decompression, may be required in some circumstances. Injured patients need to see a doctor to identify the best course of action.</p>
                                    <h3>Ototoxic Reactions</h3>
                                    <p>If your tinnitus is caused by an ototoxic medication, you may be able to find relief by altering your treatment regimen. Tinnitus symptoms caused by most ototoxic medicines are transitory and disappear when the substance is completely metabolised by the body.</p>
                                    <p>Contact your prescribing doctor if you are concerned about tinnitus as a side effect of your medicine. Stopping any medication without first consulting to your doctor is not recommended. Discontinuing a medication carries risks that may outweigh any benefits.</p>
                                    
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