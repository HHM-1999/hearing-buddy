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
                    <h1>Buddy Pack</h1>
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
                                <li class="breadcrumb-item"><a href="http://localhost/HearingBuddyNew/">Home</a></li>
                                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>hearing-aids">Hearing Aids</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>buddy-pack">Buddy Pack</a></li>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Valued at $3000</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="know-container">
                                    <div class="know-details">
                                        <p>Congratulations on your decision to seek health services from Hearing Buddy. Hearing Buddy considers itself to be a partner with you throughout every step of the way in search for a solution and our relationship with you extends beyond the initial appointment.</p>
                                        <p>Therefore, to make things standard, transparent, and to ensure we continue to support all hearing aid purchases include:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-end">
                                <div class="buddy-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Adelaide300x300.jpg" alt="">
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
                                <h2>For Private/Self-funded Clients: </h2>
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
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-loss-treatment-services-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>90 Min Initial Comprehensive Hearing Assessment Valued at $150</h3>
                                                    <p>This complimentary 90-minute hearing test will evaluate your hearing loss and possible causes, allowing for accurate diagnosis, treatment, and management. Importantly, hearing examinations can identify hidden abnormalities that require medical treatment. </p>
                                                    <div class="see-more">
                                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>90-min-initial-comprehensive-hearing-assessment">Find Out More</a>
                                                    </div>
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
                                                    <h3>Hearing services Hearing Aid Fitting and Verification <br>Valued at $ 350</h3>
                                                    <p>Your brand-new Hearing Aids will be ready and assembled with appropriate wires, tubes, moulds or domes as indicated at the Hearing aid consultation, and the model, colour and required specs will be confirmed prior to fitting. The Hearing aids will then be tried on your ears to check for comfort and best fit and to see if any changes are needed. Incorrect parameters can impact both the comfort and sound quality of a hearing device.</p>
                                                    <a class="common-button btn" href="<?php echo $sSiteURL; ?>hearing-aid-fitting-&-follow-up-free">Find Out More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-services-150x150.jpg" title="" alt="">
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
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/obstruction-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>60-day Unlimited Follow Up <br>Valued at $ 300</h3>
                                                    <p>Even if your hearing aids are working well, there’s always space for improvement. The first few weeks and months of wearing hearing aids are crucial. In the real world, your hearing aids will be tested for comfort and functionality. Following your initial fitting, a follow-up session allows to fine-tune and optimise your hearing aids even more for an even better listening experience.</p>
                                                    <div class="see-more">
                                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>hearing-aid-fitting-&-follow-up-free">Find Out More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="experience-section">
                                <div class="experience-area">
                                    <div class="row">
                                        <div class="col-md-9 d-flex">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>60-Day Money Back Guarantee</h3>
                                                    <p>Hearing Buddy offers a 60 day change of mind return period from the date you are receiving the device(s). During this period it is important that you attend appointments as required to ensure that your hearing devices are adjusted to suit your needs and that you are able to manage them correctly.</p>
                                                    <div class="see-more">
                                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>money-back-guarantee">Find Out More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/money-back-150x150.jpg" title="" alt="">
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
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/Hearing-aid-fitting-Discussion-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>End of Warranty Recall <br>Valued at $400</h3>
                                                    <p>Hearing Buddy offers a 60 day change of mind return period from the date you are receiving the device(s). During this period it is important that you attend appointments as required to ensure that your hearing devices are adjusted to suit your needs and that you are able to manage them correctly.</p>
                                                    <div class="see-more">
                                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>end-of-warranty-recalls">Find Out More</a>
                                                    </div>
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
                                                    <h3>Hearing Aid Check and Adjust <br>Valued at $1600 over 5-year period</h3>
                                                    <p>4 appts per year x for first 3-years.</p>
                                                    <p>2 appts per year x 2-years after hearing aid warranty has expired.</p>
                                                    <div class="see-more">
                                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>hearing-aid-check-and-adjust">Find Out More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-aid-in-Adelaid-australia-perth-1-150x150.jpg" title="" alt="">
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
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/choosing-hearing-aid-in-australia-150x150.jpg" title="" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-9 d-flex ">
                                            <div class="brand-details align-items-stretch">
                                                <div class="details-container">
                                                    <h3>Consumables <br>Valued at $200</h3>
                                                    <p>Your hearing aids come with a starter pack which includes 1 box of batteries, 1 pack of filters and domes, and cleaning tools. In addition, Hearing Buddy will supply up to $200 worth of consumables that can be used for future purchases of filters, domes, batteries, drying capsules, etc.</p>
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
                                                    <h3>3-Year Manufacture Warranty</h3>
                                                    <p>The hearing aid(s) are typically covered by a three-year warranty. It does not cover damage resulting from incorrect use, negligence, or accidental damage. We will handle the warranty management for you. Simply return the hearing aids to us for warranty service if anything goes wrong.</p>
                                                    <p>Please note: Ear moulds and custom shells carry limited warranty of 90 days, and accessories are generally covered for 1 year.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-flex justify-content-center">
                                            <div class="brand-img">
                                                <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/HearingLoss10Signs-150x150.jpg" title="" alt="">
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