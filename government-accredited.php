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
                    <h1>Government Accredited</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>government-accredited">Government Accredited</a></li>
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
                                <div class="col-md-8">
                                    <div class="purpose-right">
                                        <p>The Australian Government Hearing Services Program offers one of the most progressive hearing services programmes in the world. Our government recognises the personal, social, and financial costs associated with hearing loss and has established a programme to ensure that eligible seniors, pensioners, and veterans can have access to a range of hearing services. Included are a comprehensive hearing assessment and annual reviews, as well as fully subsidised hearing aids and an optional subsidised annual maintenance agreement that covers repairs, servicing, and batteries for your hearing aids at no additional cost to you other than a small yearly fee.</p>
                                        <p>Hearing Buddy is accredited by the Hearing Services Program to provide free hearing services to eligible Pensioners and Veterans.</p>
                                        <p> As a government-accredited provider of hearing services, we are governed by a regulatory framework and we are pleased to be a member of the Commonwealth’s Hearing Services programme and strive to achieve the best possible outcomes for all our clients.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex justify-content-end">
                                    <div class="purpose-left">
                                        <div class="know-img">
                                            <img class="img-fluid" src="<?php echo $sSiteURL ?>/media/imgAll/bg/australia1x1.jpg" alt="Australian Government Hearing Services Program" title="Australian Government Hearing Services Program">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>At Hearing Buddy you can be assure that we go so far as to source the highest quality totally subsidised hearing aids available at any given time. This implies that even if you choose a fully subsidised hearing aid through the programme, you will have the most advanced features and capabilities.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  -->
                    <div class="row">
                    <div class="col-md-12">
                            <div class="accordion faq-page" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            AM I ELIGIBLE ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordian-desc">
                                                <div class="purpose-right">
                                                <h3>You are eligible for the voucher component of the program if you are an Australian citizen or permanent resident 21 years or older and you are</h3>
                                                <ul>
                                                    <li>a Pensioner Concession Card holder (eligibility for a PCC does not include people on new start who are single or couples with no dependents or carer responsibilities).</li>
                                                    <li>a Department of Veterans’ Affairs Gold Card holder</li>
                                                    <li>a Department of Veterans’ Affairs White Card holder (hearing specific conditions)</li>
                                                    <li>a dependent of a person in one of the above categories</li>
                                                    <li>a member of the Australian Defense Force</li>
                                                    <li>referred by the Disability Employment Services (Disability Management Services) Program</li>
                                                </ul>
                                                <p>Please note that a Seniors Health Card does not provide eligibility for the program.</p>
                                                <p>If you are a young adult aged 21 to 25 (inclusive) you can choose to receive services through either the Voucher Program (if you meet one of the eligibility criteria listed above) or Specialist Hearing Services through Hearing Australia.</p>
                                                <p>You can visit the program’s website at <a href="#">www.hearingservices.gov.au</a> for further information.</p>                                              
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