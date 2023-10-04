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
                    <h1>Pre-Employment Test</h1>

                </div>

            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="heading">
                        <h2>$60</h2>
                    </div>
                </div>
            </div>
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="purpose-right">
                                        <p>The most common preventable cause of occupational hearing loss is noise exposure. It is irreversible once acquired and can have a big impact on a worker’s life. Workers’ compensation claims can also be costly and detrimental to firms’ reputations.</p>
                                        <p>In many jurisdictions of Australia, workers in noisy workplaces are required to have their hearing checked (audiometric testing) within three months of starting work and then every two years thereafter.</p>
                                        <p>Candidates who have previously worked in noisy environments should have their hearing tested as part of a pre-employment medical. These are called Pre-Employment Hearing Tests.</p>
                                        <p>To get the most accurate results, a quiet period of 16 hours (free from noisy work sites, light airline travel, loud stereo use, etc.) is recommended.</p>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-end align-items-center ">
                                    <div class="purpose-right  ">
                                        <div class="tinnitud-img pt-0">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/pre-employment-hearing-test-408x408.jpg" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">

                                        <h3>Included key services:</h3>
                                        <ul>
                                            <li>Individual hearing examinations for each nominated employee, as well as a confidential report summarising the results (for employee).</li>
                                            <li>Referrals to medical professionals, if appropriate.</li>
                                            <li>Educating individuals on the permissible amounts of noise exposure in the workplace</li>
                                            <li>Custom earplugs are available.</li>
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