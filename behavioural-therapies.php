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
                    <h1>Behavioural Therapies</h1>
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
                                        <p>Tinnitus has the potential to elicit powerful negative emotions such as anxiety, depression, and anger. Patients can develop emotional control and so detach tinnitus with distressing negative behavioural responses.</p>
                                        <p>Cognitive (adj. form of cognition) — pertaining to or involving the functions of attention, knowledge, memory, judgement, reason, and decision-making.</p>
                                        <p>Behavioural — pertaining to or involving physical, emotional, or psychological action.</p>
                                        <p>Behavioural therapies, which are centred on the patient’s emotional response to tinnitus, are some of the most well-established and successful treatments for severe tinnitus. These techniques have been found to consistently reduce tinnitus-related discomfort, anxiety, and depression, as well as to enhance patients’ general quality of life.</p>
                                    </div>

                                </div>
                                <div class="col-md-3  ">
                                    <div class="purpose-right  ">
                                        <div class="tinnitud-img pt-0">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/jobs-in-dorset-1255x837-1-683x683.jpg" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                    <p>The logic behind behavioural therapy is that “severe” tinnitus is determined by its emotional impact rather than its auditory qualities. (Research indicates that tinnitus loudness/pitch has little correlation with patient-reported distress.) What genuinely burdens the illness are the unpleasant psychological and cognitive responses patients have to tinnitus. In other words, the patient’s emotional response is critical in determining whether tinnitus is seen as troublesome or innocuous, emotionally disturbing, or unimportant. The purpose of behavioural therapy is to assist patients in controlling their behavioural responses to tinnitus, thereby reducing the condition’s perceived impact.</p>
                                    <p>Patients who place a high attention­­ on their tinnitus and lack emotional coping mechanisms are often more unhappy, upset, and view their disease to be more handicapping. Behavioural therapies teach patients how to decrease their internal focus on tinnitus, improve their coping, and develop alternative thinking and behaviour patterns that divert their attention away from their tinnitus. The therapy’s overall goal is to boost pleasurable activity, teach relaxation techniques, and develop cognitive abilities to substitute negative (or unhelpful) thinking.</p>
                                    <h3>Cognitive Behavioural Therapy (CBT): Is a form of talk therapy</h3>
                                    <p>CBT uses cognitive restructuring and relaxation to help patients change their tinnitus perceptions and reactions. Patients typically keep a journal and do “homework” in an attempt to strengthen their coping abilities. Weekly sessions for two to six months are common. While CBT cannot eliminate the sound entirely, it can considerably reduce its annoyance and improve overall quality of life.</p>
                                    <p>Here is a webinar by Dr. Bruce Hubbard, Director of the Cognitive Health Group on CBT and how it can help those with tinnitus.</p>
                                    <h3>Mindfulness-Based Stress Reduction (MBSR)</h3>
                                    <p>Mindfulness-based therapy focuses on acute and nonjudgmental awareness of one’s bodily, sensory, emotional, and cognitive processes. Rather than trying to ignore tinnitus, MBSR teaches patients to accept, embrace, and control it. So, sufferers can better manage their condition. It can also address negative feelings of anger and apathy that so often accompany tinnitus.</p>
                                    <h3>Acceptance and Commitment Therapy (ACT)</h3>
                                    <p>ACT highlights the importance of reducing tinnitus avoidance through mindfulness-based practices. Patients learn to fully experience their ideas, perceptions, and emotions without judgement. Patients can gain greater control over their reactions if they are able to fully embrace their negative thoughts and sensations.</p>
                                    <h3>Tinnitus Treatment Activities (TAT)</h3>
                                    <p>A subtype of CBT that focuses exclusively on tinnitus management. TAT is an incremental learning strategy to investigate tinnitus’s four major impact areas: thoughts and emotions, hearing and communication, sleep, and concentration. Additionally, the method frequently incorporates a low-level of additional sound treatment for masking purposes.</p>
                                    <h3>Tinnitus Retraining Therapy (TRT): Therapy for tinnitus re-education</h3>
                                    <p>This method assumes that tinnitus is caused by abnormal neural activity. The objective is to train the auditory system to become accustomed to the tinnitus signals, making them less obvious or annoying. Individual counselling and sound therapy are key components of TRT. Patients with tinnitus are also exposed to constant low-level broadband sound to help them become accustomed to the sound.</p>
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