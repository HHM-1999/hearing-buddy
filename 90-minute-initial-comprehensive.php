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
                    <h1>90 Min Initial Comprehensive Hearing Assessment</h1>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Free</h2>
                    </div>
                </div>
            </div>
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="know-details">
                                    <p>In addition to a hearing test, a rehabilitation assessment should assess your current ability to hear speech in both quiet and noisy environments. It’s also important to see if amplification improves your hearing.</p>
                                    <p>This complimentary 90-minute hearing test will evaluate your hearing loss and possible causes, allowing for accurate diagnosis, treatment, and management. Importantly, hearing examinations can identify hidden abnormalities that require medical treatment. We will advise you whether extra medical action is required.</p>
                                    <p>We’ll ask questions to learn more about how hearing loss affects your life and relationships. This includes your age, present lifestyle, job, and other health concerns.</p>
                                    <p>Your results will be examined in depth, and if hearing aids are recommended, the different types of hearing aids will be explained and will help you figure out which types and features of hearing aids are best suited to your needs. </p>
                                    <p>We can also help you find out more about your health insurance or how to get government assistance.</p>
                                    <p>If you or a loved one are experiencing difficulties hearing, please contact us for an evaluation.</p>
                                    <p>To learn more about our philosophy to delivering services and ongoing care for our clients, please click on the Our Approach link.</p>
                                    <a class="common-button btn my-2" href="#">Our 5 Step Approach to Successful Outcomes </a>
                                    <p>Are you ready to connect with your Hearing Buddy?</p>
                                    <a class="common-button btn my-2" href="#">Book An Appointment Now </a>

                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-end">
                                <div class="buddy-opt-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/comprehensive_hearing_assessment2.jpg" alt="">
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
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            WHY 90 MINUTES ?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordian-desc">
                                                <p>In terms of hearing health, our research indicates that Australians feel rushed during appointments, require more time to comprehend hearing-related findings, and require more time to make key decisions.</p>
                                                <p>Purchase of hearing aids, if it is recommended as an alternative, represents an important decision within itself and to describe the differences between the many types of options, a significant deal of thought and information must be put into the task at hand.</p>
                                                <p>We at Hearing Buddy believe that being well-educated empowers you to make more informed decisions in your everyday life. We want to make certain that you have all the information you want to make an educated decision about your situation.</p>
                                                <p>Driven by our core principles and our dedication to look after you, empower you, listen to you, and respect your time and investment. </p>
                                                <p>We at Hearing Buddy, strive to shatter the mould of what is considered normal and to establish a new one from the ground up.</p>
                                                <p>As a result, we do not adhere to stringent time constraints, and your session will likely run longer than the standard 60 minutes.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            WHY COMPLIMENTARY ?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordian-desc">
                                                <p>It is our goal to educate our patients about their hearing loss and the many treatment options available to them after properly analysing their needs and hearing difficulties.</p>
                                                <p>People who have been tested elsewhere or have never worn hearing aids before coming in for their first hearing test with us are common. On the other side, some clients just want a second opinion or are in the market for an update and are seeking for a competitive estimate.</p>
                                                <p>Our clinical time is worth significantly more than $150 if we charged you for the whole 90minutes. It is likely that you will overspend if you do not know the worth of our evaluation. Many people may benefit from an impartial assessment based on all the available facts, but no one wants to pay for the same thing repeatedly.</p>
                                                <p>In light of this decision, and in order to honour our promise to you, we have chosen to make our crucial clinical time accessible to Qualifying Individuals at NO CHARGE.</p>
                                                <p>In contrast, we benefit from the power to awe and inspire you. Both of us stand to gain from this arrangement. If our performance is exceptional, you may choose to collaborate with us in the future.</p>
                                                <p>To ensure that you never feel obligated to work with us, we guarantee that following the assessment, you are NOT obligated to work with us.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            CHECK IF YOU QUALIFY
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="accordian-desc">
                                                <p>We have certain terms and conditions for this free hearing test because we are devoting a large amount of valuable clinical time.</p>
                                                <h3>To be eligible</h3>
                                                <p>You must be over the age of 26 and either live or plan to stay in Australia for the foreseeable future.</p>
                                                <p>Have never visited Hearing Buddy previously.</p>
                                                <p>There is no medical or employment need to require this test. </p>
                                                <p>The test is not required to adjust your current hearing aids that are purchased elsewhere.</p>
                                                <p>You suspect you have some degree of hearing loss and interested in exploring your options.</p>
                                                <p>Please Note: Appointments are available for any of the above-mentioned reasons, and fees may apply.</p>
                                                <h3>For Pensioners and/or DVA card holders:</h3>
                                                <p>Majority of services are funded through Government but there may be a small Battery and Maintenance charge that is paid yearly.
                                                    If you are an existing pensioner already registered in a government programme and interested in relocating, please contact us for additional information.</p>
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