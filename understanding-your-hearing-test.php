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
                    <h1>Understanding Your Hearing Test</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>hearing-health">Hearing Health</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>understanding-your-hearing-test">Understanding Your Hearing Test</a></li>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>What is an Audiogram ?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <div class="purpose-left">
                                        <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/Audiogram-new-300x269.jpg" class="img-fluid img100">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="purpose-right">
                                        <p>An audiogram is a critical component of your hearing test that helps us understand your ear health. A graph that can diagnose the type of hearing loss you have, as well as the severity of your hearing loss. It can differentiate your hearing in each ear and determine if you have hearing loss on one or both sides.</p>
                                        <p>Essentially, it’s a visual depiction of your hearing. As you hear different frequencies, it illustrates how it compares to the normal hearing range. Hearing threshold levels are the lowest level of sound at which the human ear can detect a tone or sound at least 50% of the time.</p>
                                        <p>A Hearing professional will generate your audiogram using several easy tests as part of your comprehensive hearing test.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper mt-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="purpose-right">
                                        <p>An audiogram is a critical component of your hearing test that helps us understand your ear health. A graph that can diagnose the type of hearing loss you have, as well as the severity of your hearing loss. It can differentiate your hearing in each ear and determine if you have hearing loss on one or both sides.</p>
                                        <p>Essentially, it’s a visual depiction of your hearing. As you hear different frequencies, it illustrates how it compares to the normal hearing range. Hearing threshold levels are the lowest level of sound at which the human ear can detect a tone or sound at least 50% of the time.</p>
                                        <p>A Hearing professional will generate your audiogram using several easy tests as part of your comprehensive hearing test.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center justify-content-center">
                                    <div class="purpose-left">
                                        <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/audiogram-presbyacusis-rgb-300x295.jpg" class="img-fluid img100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="accordion-area-choose">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="accordion faq-page" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How Is Audiogram Created
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>During a hearing test, sounds at various frequencies are played at progressively lower volumes to assess the acuity of each ear. When testing with earphones or loudspeakers, the sounds go into the ear canal, through the middle ear to reach the inner ear. This is known as Air conduction testing or Pure Tone Audiometry. Air conduction testing looks at how the whole hearing system responds to sound.</p>
                                                        <p>If air conduction testing shows a hearing loss, the cochlea can also be tested in isolation with a Bone conduction test.​ A device called a bone conductor is placed behind the ear to send sounds directly to the inner ear. Sounds are sent through the bones of the head and do not pass through the eardrum or the middle ear. It is a crucial component of the evaluation as it determines and reveal any inner ear issues.</p>
                                                        <p>When the person responds to a sound at the lowest intensity at which they can hear a frequency, the test administrator will record these points (pitch). This number represents your threshold level.</p>
                                                        <p>To be clear, the audiogram only assesses the ability to hear in quiet, not the quality of hearing noise or hearing speech in noise.</p>
                                                        <p>An audiogram may not disclose information about your speech recognition ability, therefore, it’s critical that you speak with a hearing health specialist about it. All of these are easy hearing exams that are performed as part of the comprehensive hearing test that Hearing Buddy offers.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Understanding Audiogram Graph
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>The amount (or degree) of hearing loss a person experiences is based on hearing sensitivity. In order to determine a person’s degree of hearing loss, their hearing thresholds must be determined. Hearing thresholds are defined as the lowest level sound that can be heard 50% of the time. The decibel (or dB) is the unit of intensity used to describe hearing sensitivity. During a diagnostic hearing evaluation, the threshold is measured at different frequencies (or Hertz, Hz) in each ear.</p>
                                                        <p>The audiogram is divided into two halves by two axes.</p>
                                                        <p>Vertical Axis</p>
                                                        <p>The Y-axis (vertical) measures the intensity, or loudness, of the sound. It’s measured in decibels (Db) and range from -10 to 110 on the audiogram</p>
                                                        <p>In context, 30dB is approximately the volume of whispering, 60dB is around the level of a normal conversational sound, 80dB is approximately the level of heavy traffic, and 140dB is approximately the level of a really loud sound (such as a gunshot or jackhammers).</p>
                                                        <p>On the graph, the lowest values are at the top and the highest at the base. Normal hearing humans can hear sounds below zero decibels (dB), where the graph starts. Adults with hearing ranges of 0 to 20 dB are considered normal.</p>
                                                        <p>What we’re looking for is hearing loss that falls below this level of measurement.</p>
                                                        <p>Horizontal Axis</p>
                                                        <p>The horizontal axis, on the other hand, shows the frequency and pitch of a tone. Hertz (Hz) is a unit of frequency measurement that expresses the number of vibrations per second that make up a sound wave.</p>
                                                        <p>It’s important to keep this in mind when looking at your audiogram: as you move further to one side, the frequency gets higher. It’s similar to how piano keys work: the lowest pitch is on the left, and it rises in pitch as you move right.</p>
                                                        <p>A normal ear should be able to hear frequencies as low as 20 Hz and as high as 20,000 Hz with ease. However, the majority of speech sounds occur between 250 and 8,000 Hz, which is the frequency range most commonly tested for.</p>
                                                        <p>The audiogram will display the threshold levels for each ear. This line represents your hearing capacity in terms of volume and frequency.</p>
                                                        <p>A red “O” indicates a right ear response, whereas a blue “X” indicates a left ear response. A red line connects the “O”s, while a blue line connects the “X”s shows hearing levels in the left ear measured with headphones (air conduction).</p>
                                                        <p>
                                                            < or [ is the result from your right ear as measured by bone conduction</p>
                                                                <p>> or ] is the result from your left ear as measured by bone conduction.</p>
                                                                <p>When something stops sounds from moving through the eardrum and middle ear, bone conduction hearing levels will be better than air conduction levels. This means a conductive hearing loss is present.</p>
                                                                <p>When sound moves normally through the outer and middle ear, but the inner ear does not work normally, both bone conduction and air conduction hearing levels will be the same. A sensorineural hearing loss is present.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Hearing Loss Levels Defined
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>The degree of hearing loss is expressed by the difference between a person’s threshold and the average threshold for people with normal sensitivity. ­­­The list below outlines different hearing loss thresholds as they are determined in relation to an individual with a normal hearing threshold. </p>
                                                        <div class="acc-img m-auto w-50 mt-4">
                                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/levels-of-hearing-ability.jpg" class="img-fluid img100">
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