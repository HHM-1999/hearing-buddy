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
                    <h1>Untreated Hearing Loss: Why Does It Matter ?</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>untreated-hearing-loss-why-does-it-matter">Untreated Hearing Loss</a></li>
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
                                <div class="col-md-6">
                                    <div class="purpose-right">
                                        <p>Despite the prevalence of hearing loss nationwide, many people delay seeking treatment out of denial, fear, or embarrassment. Untreated hearing loss can have a variety of consequences, some of which are detrimental to your well-being. Disability rates for hearing loss have recently been raised by WHO.</p>
                                        <p>Hearing loss can cause mental (psychological) and social issues that can have a negative effect on a person’s quality of life. Those with hearing impairments may encounter distorted and incomplete communication, which can have a significant influence on their professional and personal lives, placing them at risk for isolation and withdrawal. However, interpersonal relationships are particularly damaged.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="purpose-right">
                                        <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/hearing-aid-1-1024x538.jpg" class="img-fluid img100">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>In reality, untreated hearing loss has a greater impact on quality of life than was previously believed. Between 2010 and 2013, the WHO increased the disability weights for hearing loss, stating that hearing loss has a considerably greater impact on an individual’s life than was previously computed. The GBD (general burden of disease) for mild hearing loss has increased by a factor of two, whereas the GBD for severe and profound hearing loss has increased by a factor of more than five.</p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>In reality, untreated hearing loss has a greater impact on quality of life than was previously believed. Between 2010 and 2013, the WHO increased the disability weights for hearing loss, stating that hearing loss has a considerably greater impact on an individual’s life than was previously computed. The GBD (general burden of disease) for mild hearing loss has increased by a factor of two, whereas the GBD for severe and profound hearing loss has increased by a factor of more than five.</p>
                                        <p>Untreated hearing loss may impact in various ways and can affect to:</p>
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
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Sensory Deprivation
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>“If you don’t use it, you lose it!”</p>
                                                        <p>This phrase alone is enough to put anyone on edge. Sensory deprivation is nature’s way of telling us that if we don’t assist our bodies heal, our bodies may decide that we don’t need that sense after all. In the same way that you lose muscle definition if you don’t keep up with your training routine, you may lose your hearing if it remains undiagnosed and untreated.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Decline In Mental Clarity
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>When you have trouble hearing what is going on around you, your mental acuity and processing speed may diminish. Some experts believe that this may be due to a decrease in brain stimulation, which may impede the brain’s ability to process sound and recognise speech.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Increased Risk of Dementia
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Hearing loss is a modifiable risk factor for dementia, according to a 2020 Lancet report. Moderate hearing loss triples dementia risk. As a result of diminished mental stimulation and isolation, hearing loss might occur. Managing hearing loss may prevent cognitive deterioration by keeping the brain active. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    May Impact Memory
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Is it difficult for you to recall what you have just heard? When hearing speech is challenging, it might be difficult to comprehend and retain what is being said.</p>
                                                        <p>This is due to the fact that the additional cognitive resources required for listening may diminish the cognitive resources available for recall and comprehension.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Relationships
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Untreated hearing loss is known to negatively affect interpersonal connections. In particular with your spouse, but also with your children and grandchildren. Relationships with friends, other family members, and coworkers may also suffer. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    Avoiding Social Situations
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Your social life may be adversely affected. When you can’t hear, it may be tough to maintain touch with your friends and family. Larger gatherings, such as wedding receptions or dinner parties, may make this more apparent than others. As a result, you may find yourself withdrawing from social situations or denying invitations. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSeven">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                    Feeling Left Out
                                                </button>
                                            </h2>
                                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Keeping up with daily conversations may become more difficult when your hearing deteriorates. Depending on the situation, you may have to ask for repeats or sit closer to them to read their lips or observe their facial expressions in order to comprehend conversations. You may even nod and pretend to comprehend the speaker’s words. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingEight">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                                    Developing Anxiety and Frustration
                                                </button>
                                            </h2>
                                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>As your hearing ability drops, you may find it harder to distinguish and localise sounds in the environment. This may make you feel more insecure in your environment. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingNine">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                    Mental Exhaustion and Fatigue
                                                </button>
                                            </h2>
                                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Communication can be exhausting when it’s tough to hear. This is due to the fact that comprehension necessitates greater mental exertion. In social situations, restaurants, or large groups, where you may have to focus even harder to understand what others are saying, this can be very exhausting. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="source">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>Source:</p>
                                    <p>Dementia prevention, intervention, and care, 2017, Livingston, Gill et al., The Lancet, Volume 390, Issue 10113, 2673-2734 Hearing Loss in older adults affects neural systems supporting speech comprehension, J Neurosci. 2011 Aug 31;31(35):12638-43. doi: 10.1523/JNEUROSCI.2559-11.2011.</p>
                                    <p>The Lancet Commissions| Volume 396, ISSUE 10248, P413-446, August 08, 2020 – Dementia prevention, intervention, and care: 2020 report of the Lancet Commission. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="better-hearing">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Next Steps to Better Hearing Health</h2>
                                </div>
                            </div>
                        </div>
                        <div class="steps">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="value-box">
                                        <h4>Take our 10min online hearing test</h4>
                                        <a class="common-button btn" href="https://hearing-screener.beyondhearing.org/HearingBuddy/VBim7A/welcome">Start Now</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="value-box">
                                        <h4>Connect with your Hearing Buddy</h4>
                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>contact">Booking Appointment</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="value-box">
                                        <h4>Funding options and government subsidies</h4>
                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>services-for-pensioners-and-veterans">Fund Options</a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="value-box">
                                        <h4>Hearing services at your doorstep</h4>
                                        <a class="common-button btn" href="<?php echo $sSiteURL; ?>home-visit">Home Visit Options</a>
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