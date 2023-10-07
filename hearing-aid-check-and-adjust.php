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
                    <h1>Hearing Aid Check and Adjust</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>services">Our Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>hearing-aid-check-and-adjust">Hearing Aid Check and Adjust</a></li>
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
                        <h2>Upto 4 Complimentary Per Year for 3 Years</h2>
                    </div>
                </div>
            </div>
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="know-details">
                                    <p>Having trouble with your hearing aids? Or just wanting a routine check?</p>
                                    <p>Your hearing varies over time, and often hearing aids will need adjustments to compensate for these changes. Much like a car, hearing aids do require frequent servicing and maintenance to perform efficiently.</p>
                                    <p>Hearing Buddy considers itself to be a partner with you throughout every step of the way in search for a solution and our relationship with you extends beyond the initial appointment. So, to make things standard, transparent, and to ensure we continue to support all our clients, all hearing aids purchased from us come with a <span><a href="buddy-pack.php"> BUDDY PACK</a></span> at no extra cost in addition to our 60-day unlimited follow-up.</p>
                                    <p>This entitles you to up to 4 appointments per year until the end of your hearing aid warranty to troubleshoot and resolve any issues. While it is uncommon for someone to require four appointments, for your peace of mind and to cover the worst-case situation, we extend and exceed the standard.</p>
                                    <p>Recall Service- It’s all about Staying Connected!</p>
                                    <p>In our busy world, self-care is often neglected and it’s natural to overlook routine maintenance. Missed opportunities are a thing of the past when you have a recall system in place. As a result, our team will send reminders twice a year when you are due for any service.If you have wax build-up issues, you may need to schedule professional cleanings more frequently.</p>
                                    <p>This will ensure that your investment continues to perform successfully for many years.</p>
                                    <p>That is not the only reason it may be beneficial to maintain frequent appointments with a hearing specialist once you have received your hearing aids. There are a variety of reasons why you may need to have your hearing equipment examined and adjusted.</p>
                                    <p>See below some of the problems people encounter with hearing aids and possible solutions.</p>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex justify-content-end">
                                <div class="buddy-opt-img pt-5">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing_aid_check.jpg" alt="">
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
                            <div class="accordion faq-page" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                            PROBLEMS
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordian-desc">
                                                <div class="purpose-right">
                                                    <ul>
                                                        <li><span>Hearing not as well as before:</span> This is the most common problem and can be caused by a variety of factors including a change in hearing, incorrect insertion, blocked ear canals due to wax, or a problem with the hearing aid or mould itself.</li>
                                                        <li><span>Wax/Dust Build-up:</span> Another typical cause of hearing aids not functioning properly is when wax and debris clogs the sound outlet or ventilation opening, resulting in weak, distorted, or no sound.</li>
                                                        <li><span>Hearing Feedback:</span> Whistling – like sounds in your ear</li>
                                                        <p>Hearing aid whistles can be caused by ear wax obstructing the ears, sound hitting the wax and rebounding back, or the volume on the hearing aids is turned up too high that the existing domes or moulds can’t support.</p>
                                                        <li><span>Comfort Issues:</span> Our ear canals can change shape over time, and your present moulds or domes may cause discomfort or prove to be an inadequate fit.</li>
                                                        <li><span>To Meet Specific New Goals:</span> Living well and overcoming some communication obstacles with hearing aids has made you more open to new experiences. You may have a new goal, such as socializing or joining a new group, and now there is a need for a specific programme to support you in such settings.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            SOLUTION
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordian-desc">
                                                <div class="purpose-right">
                                                    <ul>
                                                        <li><span>Annual Hearing Checks:</span> It is normal to experience fluctuations in hearing, and at some point, your hearing aids will need to be reprogrammed. We recommend and recall for an annual hearing check to account for any changes.­­ In addition, acclimatisation is a gradual process that takes place over time and there is no set timeframe. It’s possible that your hearing aids were set slightly below the target for your comfort at first, but now that your brain has accustomed to sounds, you may be ready for an increase in gain level.</li>
                                                        <li><span>Clean and Check:</span> Along with monitoring your hearing for changes, it’s important to occasionally get a professional cleaning. We can assist you in ensuring that your hearing aid is operating properly, and conduct checks on the performance, condition, and sound of your hearing aid. This may include, but is not limited to, the replacement of filters, domes, and receivers. Before making any alterations to the hearing aid setting, we must perform this check to identify any problems with the hearing aid.</li>
                                                        
                                                        <li><span>Loan Aids Service:</span> If we are unable to repair your hearing devices in-house, they will be sent in for repair. Your hearing aids 3 year warranty covers all repair costs. To ensure that you continue to enjoy your life without hearing aids, Hearing Buddy provides free loan aids and programs them to your existing settings.</li>
                                                        <li><span>Adjustments:</span> This may entail reprogramming hearing aids to account for changes in hearing thresholds, recalibrating for feedback or changes in acoustics, and adding additional programs to meet current needs, among other things.</li>
                                                        <li><span>Ear Impressions:</span> If new ear moulds are advised for improved fit, comfort, or amplification, impressions will be taken, and new moulds will be ordered in. As ear mould costs are covered only during the initial fit and include a 90-day warranty, depending on your timeframe, there may be additional costs associated with repairing/replacing existing or buying new ear moulds.</li>
                                                        <li><span>Revisit Cleaning & Maintenance:</span> We recognise that it’s difficult to retain everything we learned at our fitting and follow-up appointments, and with time we often forget a few details or become complacent over time. We’re here to support you with your needs and to motivate you to continue learning.</li>
                                                    </ul>
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