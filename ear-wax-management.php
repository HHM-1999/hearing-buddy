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
                    <h1>Cerumen – Ear Wax Management</h1>
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
                                    <h2>What is Ear Wax?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="purpose-right">
                                        <p>Earwax, sometimes referred to as cerumen is a natural barrier that is made by sebaceous and apocrine sweat glands in the ear canal. Its purpose is to clean and protect the ears by trapping dirt and bacteria so they cannot get further inside the ear and create an ear infection. Occasionally, it can become impacted, resulting in blocked ears, ear discomfort, and temporary hearing loss. Earwax vary in colour from bright yellow to dark brown and can be dry or wet and still serve the same purposes.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex justify-content-center">
                                    <div class="ear-wax-img">
                                        <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/Earworx.webp" class="img-fluid img100">
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
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Why Ear Wax becomes impacted?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <div class="purpose-right">
                                                            <p>During a hearing test, sounds at various frequencies are played </p>
                                                            <ul>
                                                                <li>They have very narrow, bendy or hairy ear canals.</li>
                                                                <li>They work in dirty or dusty environments.</li>
                                                                <li>They clean your ears yourself, which can push wax further into the ear.</li>
                                                                <li>Using headphones or a hearing aid on a regular basis.</li>
                                                                <li>They are older because wax hardens with age and won't fall out as easily.</li>
                                                                <li>Because of genetics, some people make too much earwax.f</li>
                                                                <li>People with dry earwax are more likely to get impacted earwax.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Signs of Impacted Ear Wax
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <div class="purpose-right">
                                                            <p>In addition to blocking sound from reaching your ears, excessive earwax can also trap allergens there. Too much earwax might cause the following symptoms:</p>
                                                            <ul>
                                                                <li>Reduced Hearing</li>
                                                                <li>Dizziness.</li>
                                                                <li>Tinnitus (Ringing in ears)</li>
                                                                <li>Ear pain or discomfort</li>
                                                                <li>Feeling Blocked or full</li>
                                                                <li>Impacted Ear wax may occasionally result in hearing loss or even an ear infection.</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    How is wax build-up in the ears treated?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <div class="purpose-right">
                                                            <p>Usually ear wax flows out naturally and your Ears self-clean with everyday jaw movement, talking and chewing etc. and comes out unnoticed when you shower or take a bath. There are, however, some basic things you may do if you notice any symptoms of ear wax build-up.</p>
                                                            <ul>
                                                                <li>Avoid trying to remove the ear wax with your fingers, cotton buds, or any other object as this can push the ear wax in further and may damage your ear.</li>
                                                                <li>Don’t try to pick the ear wax if you have any active ear infections, ear surgeries or any ear abnormalities.</li>
                                                                <li>Using ear drops to soften wax is a good initial step to take. Chemical drops from your pharmacy - these are made up of a mild and safe chemical that softens the ear wax, so it falls out.</li>
                                                                <li>Having a Qualified Professional manually remove the build-up.</li>
                                                                <p>Micro-suction earwax removal, sometimes referred to as ear vacuuming, is the most commonly and preferred method of earwax removal used by ENT Surgeons. It is a non-invasive, safe, and effective method of removing extra ear wax.</p>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                    What Makes Micro-Suction Better?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <div class="purpose-right">
                                                            <p>As opposed to having water syringed into your ears, micro-suction is an entirely dry technique. Although water syringing can be used to remove wax, it has drawbacks and can be painful and messy. Some groups, such as those with perforated eardrums or grommets, diabetics, those with weakened immune systems, and people on blood thinners, must use or prefer a dry approach.</p>
                                                            <p>People who currently have an ear infection can also benefit from the use of micro-suction and curettage to clear out illness-related debris and improve the effectiveness of prescribed ear drops. Additionally, it can be used to eliminate foreign objects like insects, cotton swabs, and errant hearing aid domes.</p>
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
                    <div class="micro-suction">
                        <div class="experience-area">
                            <div class="row">
                                <div class="col-md-3 d-flex justify-content-center">
                                    <div class="brand-img">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/empoering-hearing-loss.png" title="" alt="">
                                    </div>
                                </div>
                                <div class="col-md-9 d-flex">
                                    <div class="brand-details align-items-stretch">
                                        <div class="details-container">
                                            <!-- <h3>A Buddy that Empowers</h3> -->
                                            <p>If you’re dealing with earwax build-up, it’s important to clear it as soon as possible. If not, it may eventually lead to a more serious condition like an ear infection.</p>
                                            <p>Hearing Buddy offers micro-suction and curettage for ear wax removal performed only by qualified professional.</p>
                                            <h3 class="mt-2">For the safe and efficient removal of extra ear wax, using micro-suction call or email us.</h3>
                                            <div class="button-grp">
                                                <a href="<?php echo $sSiteURL; ?>contact" class="common-button btn">Book Appointment</a>
                                                <a href="<?php echo $sSiteURL; ?>ear-wax-removal" class="common-button btn">Ear Wax</a>
                                            </div>
                                        </div>
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