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
                    <h1>Types Of Hearing Aids</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>hearing-aids">Hearing Aids</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>types-of-hearing-aids">Types Of Hearing Aids</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="know-container">
                                    <div class="know-details">
                                        <p>Thanks to advancements in digital technology and miniaturization of the internal components, hearing aids are available in many different sizes, and styles. Today’s hearing aids are sleek, compact, and innovative – offering solutions to a wide range of hearing aid wearers.</p>
                                        <p>When selecting your hearing aid type we consider:</p>
                                        <ul>
                                            <li>Your degree of the hearing loss (determines power requirements)</li>
                                            <li>Your manual dexterity</li>
                                            <li>Your visual abilities</li>
                                            <li>Your budget</li>
                                            <li>Your cosmetic preferences</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-end">
                                <div class="tinnitud-img py-3">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/heroBg5.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="private-client">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>In-The-Ear Type Hearing Aids</h2>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="purpose-right">
                                    <p>In-the-Ear (ITE) styles provide a custom fit to the shape of your unique ear canal from a cast or impression we take of your ear. Hearing aid manufacturers provide different skin tones to camouflage with the outer ear. ITE styles vary in size from invisible to full shell – Below is each style, ranging from smallest to largest. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/invisible-in-canal-hearing-aid-AUSTRALIA-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Invisible In-The-Canal (IIC)</h3>
                                                    <p>The smallest custom style, IIC instruments sit invisibly in or past the second bend of the ear canal. Specifically designed for mild to moderate hearing loss, IIC styles are truly discreet. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Completely-in-the-Canal (CIC)</h3>
                                                    <p>The smallest custom style, CIC instruments fit deeply and entirely within the ear canal. They fit mild to moderate hearing losses and offer high cosmetic appeal, as they’re nearly invisible when worn. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Completely-in-the-Canal-150x150.jpg" title="" alt="">
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
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/in-the-canal-hearing-aid-itc-500x500-1-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>In-the-Canal (ITC)</h3>
                                                    <p>ITC instruments sit in the lower portion of the outer ear bowl, making them comfortable and easy to use. Because they’re slightly larger than CIC models, they have a longer battery life, and can host additional features such as directional microphones for better understanding in noisy environments, and controls such as volume controls. They fit mild and moderate hearing losses. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Full Shell or In-the-Ear (ITE)</h3>
                                                    <p>Full shell models sit flush within the outer ear bowl. Their size allows the maximum number of additional controls and features such as directional microphones, which require space on the outer portion of the instrument. They use a larger battery size than the smaller styles, and can fit a larger receiver with enough power for even some severe hearing losses. Because of their flexibility, they’re widely recommended for mild to severe hearing loss. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/insera-full-shell-500x500-1-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="private-client">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h2>Behind-The-Ear Type Hearing Aids</h2>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-wrapper">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="purpose-right">
                                    <p>Our most popular style, Behind-the-Ear (BTE) styles sit behind or on top of the outer ear, with tubing that routes sound down into the ear. The tubing connects to a soft ear tip or earmold to provide security in the ear canal. BTEs blend with hair or skin tones, or funky designs to suit personal preferences.</p>
                                    <p>Depending on hearing aid manufacturer, BTE styles provide different features, battery sizes and degrees of power (larger instruments generally have more power than smaller ones). We help personalize the device to best suit your lifestyle and hearing needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/RIC-PHONAK-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Receiver in the Canal (RIC)</h3>
                                                    <p>The most popular and discreet style, RIC (receiver-in-canal) models are mini BTEs that have the speaker of the instrument incorporated in the ear tip, instead of in the main body of the instrument. RIC instruments fit mild to severe hearing losses. This hearing aid style looks similar to the Mini BTE when worn on the ear. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>BTE with custom earmold</h3>
                                                    <p>BTEs with earmolds fit mild through profound hearing losses. Their longer shape follows the contour behind the outer ear and house many features such as a program button and volume control. The earmold color and style, as well as the wearer’s hairstyle, determine exactly how they’ll look on each person. </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/BEHIND-THE-EAR-PHONAK-150x150.jpg" title="" alt="">
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