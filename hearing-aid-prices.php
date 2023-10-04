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
                    <h1>Hearing Aid Prices</h1>
                </div>
            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>There is no way around the fact that hearing aids are expensive. Hearing aid prices depends on the level of sophistication, hearing aid prices can be slightly less than $1000 to $5000 per device.</p>
                                        <p>The majority of patients with hearing loss require two hearing aids, and the expense is sometimes not covered by their health insurance plan. Hearing aids might be expensive, but that doesn’t have to be a barrier to accessing the support and relief they can give. There is a lot to consider when it comes to the pricing.</p>
                                        <p>In the long run, hearing aids are a worthwhile purchase, as you’ll wear them all day every day. When purchasing hearing aids, it is important to ensure that the money and time invested is worthwhile.</p>
                                        <h3>What is included in the price of hearing aids?</h3>
                                        <p>Despite the expensive cost of hearing aids, it is vital to remember that you are paying for much more than the devices themselves.</p>
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
                                                    Bundled vs. Unbundled Services
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Typically, your purchase includes the hearing test, consultation, initial fitting, and all follow-up adjustments, routine cleanings, and a three-year warranty. This is referred to as “bundled pricing.” Typically, hearing aid warranties cover all repairs and include a one-time replacement policy if the device is lost. Some hearing care experts also provide an initial supply of hearing aid batteries.</p>
                                                        <p>Why is bundling so prevalent? Your hearing varies over time, and often hearing aids will need adjustments to compensate for these changes. Much like a car, hearing aids do require frequent servicing and maintenance to perform efficiently. You are investing in both the professional and the hearing aid technology</p>
                                                        <p>Nonetheless, some clinics may “unbundle” hearing care charges from hearing aid costs. Not only does this make the purchase price more attractive for advertising and marketing purposes, but it also fails to account for hidden costs. In this pricing structure, you may be able to choose which services, such as a loss and damage warranty, you want to pay for in advance and which you want to pay for as you go, such as hearing aid cleaning services. Initially, the price of a particular hearing aid may appear appealing, but in long run the total amount you spend over 5–6 years for paying for services and maintenance separately could be significantly higher than the bundle price. Therefore, it can be less cost-effective.</p>
                                                        <p>In either case, make sure to ask your hearing care professional what is included in the price of the hearing aids to ensure that you fully comprehend what you are acquiring.</p>
                                                        <p>At Hearing Buddy, we consider ourselves to be a partner with you throughout every step of the way in search for a solution and our relationship with you extends beyond the initial appointment.</p>
                                                        <p>As a result, all hearing aid purchased from us are bundled into a BUDDY PACK to ensure consistency, transparency, and continued support for all clients.</p>
                                                        <p>Learn more about what our Buddy Pack includes.</p>
                                                        <a href="<?php echo $sSiteURL; ?>buddy-pack" class="common-button btn" alt="Buddy Pack" title="Buddy Pack">Buddy Pack</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Factors Influencing Price
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>The price of hearing aids is primarily determined by the level of technology and features incorporated. As is the case with the majority of consumer electronics, hearing aids have become less expensive as their technological sophistication has increased. </p>
                                                        <p>While the overall price of hearing aids has been stable over the past two years, the technology available for the price is significantly more advanced than it was even two years ago. What was once a cutting-edge hearing aid is now considered standard equipment.</p>
                                                        <p>Every producer of hearing aids strives to provide devices that satisfy the needs of patients and their budgets. Almost every product line contains different performance levels or price points for this reason. The most sophisticated level will include the most advanced noise reduction electronics and wireless functionality. As the price falls, lower performance tiers will contain fewer and less advanced features.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Your Lifestyle and Priorities
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>It is essential to evaluate your lifestyle and hearing demands in order to choose the most appropriate technology for you. There is a hearing aid developed precisely for every activity level. Important considerations include functionality, you will need to determine which of the available features are most important to you. </p>
                                                        <p>What would you like the hearing aid to accomplish? Are you social and active, or do you mostly stay at home? Attend church or other meetings in which sound is projected? Do you like watching television or using the telephone? Be sure to discuss your responses with your hearing healthcare professional.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Why are hearing aids so expensive? 
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Hearing aid pricing includes both the cost of the device and the professional’s services. </p>
                                                        <p>A portion of the cost of manufacturing hearing aids is attributable to the yearly research required to enhance technology. The industry spends hundreds of millions of dollars annually to enhance the performance of these gadgets. These investments have improved the effectiveness of hearing aids.</p>
                                                        <p>Another method to consider the cost of hearing aids is as follows. If your hearing aids cost $8,000 and have a six-year lifespan, they will cost you approximately $1333 annually, $111 monthly, or $3.7 per day. In other words, while the total cost is substantial, the recurring cost is fairer. Similar to the monthly cost of internet or entertainment channel subscriptions. When considering the communication, relationship, and health benefits of hearing aids, the majority of respondents concur that the investment is worthwhile.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Why should I purchase hearing aids? 
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <p>Consider the financial ramifications of not purchasing hearing aids when determining whether or not to invest your hard-earned cash in them. It is practically impossible to assign a monetary value on conversations missed with your spouse, family, friends, and co-workers.</p>
                                                        <p>Some of life’s most beautiful and significant sounds, such as your grandchildren’s laughing, cheery bird melodies, rains falling softly outside your window, your doorbell, the car’s indicator, and the oven timer, are also lost to those with hearing loss. If you are still employed, your hearing loss is costing you money. The good news is that the use of hearing aids can minimise these effects by 50%. That is an excellent return on investment.</p>
                                                        <p>Lastly, hearing aids are beneficial to your health. Untreated hearing loss is associated with dementia, depression, and an increased risk of tripping and falling.</p>
                                                        <p>Purchasing hearing aids is an investment in your quality of life, career, relationships, and health as a whole.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="yoga-section">
                        <div class="know-wrapper">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 d-flex align-items-center">
                                        <div class="know-container">
                                            <div class="know-details">
                                                <p>At Hearing Buddy, we comprehend both your hearing loss and your financial position. Do not put off taking this vital step to improve your quality of life. Book your appointment today or request a home visit</p>
                                                <a class="common-button btn mt-4" href="<?php echo $sSiteURL; ?>contact">Book Appointment</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 d-flex align-items-center justify-content-center">
                                        <div class="aid-price-img">
                                            <img class="img-fluid" src="<?php echo $sSiteURL?>media/imgAll/bg/yoga.webp" alt="">
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