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
                    <h1>How Hearing Aids Can Help?</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>hearing-health">Hearing Health</a></li>
                                <li class="breadcrumb-item active"><a href="<?php echo $sSiteURL; ?>how-hearing-aids-can-help">How Hearing Aids Can Help</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
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
                                    <p>Hearing aids are an extraordinary alternative for many individuals and can alleviate a number of the aforementioned concerns. Multiple studies and surveys have demonstrated that hearing aids improve the quality of life for those with hearing loss. They are designed to magnify the sounds that you cannot hear. They do not restore your hearing, but rather amplify sounds in the frequency ranges you cannot hear. Hearing aids have customised settings for your various listening environments, allowing you to listen in various settings, such as a restaurant or a car.</p>
                                    <h3>Benefits of Hearing Aids to Health</h3>
                                    <ul>
                                        <li>Greater self-assurance, a more positive self-image, and enhanced communication contribute to an overall increase in self-esteem.</li>
                                        <li>Improve social and emotional concerns caused by untreated hearing loss.</li>
                                    </ul>

                                </div>

                            </div>
                            <div class="col-md-5 d-flex justify-content-end align-items-center">
                                <div class="purpose-left">
                                    <div class="tinnitud-img">
                                        <img class="img-fluid pt-0" src="<?php echo $sSiteURL ?>/media/imgAll/bg/HEARING-BUDDY-EMPOWERS-grey_1_500x500.jpg" alt="" title="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 ">
                                <div class="purpose-right">
                                    <ul>
                                        <li>Engage in more social interactions and activities, resulting in enhanced relationships with friends, family, and co-workers.</li>
                                        <li>Increased energy-levels and regard for physical safety.</li>
                                        <li>Increased participation and enjoyment in leisure activities.</li>
                                    </ul>

                                    <h3>Assistive listening devices (ALDs)</h3>
                                    <p>Hearing aids provide significant benefits for those suffering from hearing loss, but in some cases, they alone cannot address specific listening situations. Assistive listening devices can be used to help you hear better while watching television, listening to the radio, talking on the phone, or attending sermons or lectures. Your hearing care provider is an expert in this area and can provide guidance. </p>
                                    <h3>Accessories</h3>
                                    <p>There are a variety of accessories available to help you get the most out of your hearing aids, including miniature microphones that make listening to someone from a distance simpler, wireless capabilities to stream music from your smartphone or automobile, and the ability to make hands-free phone conversations. A remote control is small and compact enough to fit in your pocket or handbag, allowing for simple volume and programming control with the push of a button. The unlimited array of options makes using hearing aids much simpler and more pleasurable.</p>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="experience-area pt-3">
                                        <div class="row">
                                            <div class="col-md-3 d-flex justify-content-center">
                                                <div class="brand-img">
                                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/banner-hearing-test.webp" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-9 d-flex">
                                                <div class="brand-details align-items-stretch">
                                                    <div class="details-container">
                                                        <h3>How can we help?</h3>
                                                        <p>If you suspect you or a loved one suffers from hearing loss, don’t delay, and seek support immediately. A baseline hearing test, appropriate treatment options, and minor lifestyle adjustments can result in significant improvements to your hearing health. Schedule an appointment with Hearing Buddy and take the first step towards a lifetime of improved hearing.</p>
                                                        <div class="see-more">
                                                            <a class="common-button btn text-center" href="<?php echo $sSiteURL; ?>contact">Find Out More</a>
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