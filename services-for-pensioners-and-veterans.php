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
                    <h1>Services For Pensioners and Veterans</h1>
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
                                <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $sSiteURL; ?>services">Our Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>services-for-pensioners-and-veterans">Services For Pensioners and Veterans</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="know-container">
                                    <div class="know-details">
                                        <h3>Australian Government Hearing Services Program</h3>
                                        <p>The Australian Government Hearing Services Program offers one of the most progressive hearing services programmes in the world. Our government recognises the personal, social, and financial costs associated with hearing loss and has established a programme to ensure that eligible seniors, pensioners, and veterans can have access to a range of hearing services.</p>
                                    </div>
                                    <div class="know-details">
                                        <h3>How Can We Serve Our Pensioners & Veterans?</h3>
                                        <p>Hearing Buddy is accredited by the Hearing Services Program to provide free hearing services to eligible Pensioners and Veterans. As a government-accredited provider of hearing services, we are governed by a regulatory framework, and we are pleased to be a member of the Commonwealth’s Hearing Services programme and strive to achieve the best possible outcomes for all our clients.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-end">
                                <div class="tinnitud-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/australia1x1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Hence, we provide</h2>
                        </div>
                    </div>
                </div>
                <div class="accordion-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="accordion faq-page" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Fully Subsidised Comprehensive Hearing Assessment
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>Highly qualified and experienced practitioners conduct a thorough hearing evaluation, interpret results, and make appropriate recommendations or medical referrals where required. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Fully Subsidised Hearing Devices
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>If the evaluation shows that a hearing aid or other device will help you, you can be assured that we go so far as to source the highest quality totally subsidised hearing aids available at any given time. This implies that even if you choose a fully subsidised hearing aid through the programme, you will have the most advanced features and capabilities.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Partially Subsidised Hearing Devices
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>Federal subsidies are available to help pensioners and veterans afford more modern solutions if required.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Follow Ups
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>Following your fitting, a follow-up visit will be scheduled within 1-2weeks. It is important to attend this appointment as at this session, you will be able to share your experiences with your new hearing device(s) and based on your feedback your Clinician will be able to finetune your hearing aids and make any necessary adjustments to suit your needs. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                Advice and Counselling
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>Managing and adapting to hearing aids, particularly in the first few days, can be uncomfortable and disruptive to your normal routine. While it is natural to feel this way, you are not alone. We’re here to give you the tools you need to succeed and to inspire you to keep learning. As a result, if you have any questions or concerns over your hearing aids, or anything else you’d like us to revisit, please let us know. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Annual Reviews and Hearing Checks
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>Your hearing varies over time, and often hearing aids will need adjustments to compensate for these changes. Hearing Buddy considers itself to be a partner with you throughout every step of the way in search for a solution and our relationship with you extends beyond the initial appointment. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                                Annual Maintenance
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordian-desc">
                                                    <p>If you have hearing aids, we strongly recommend that you sign up for a maintenance agreement with Hearing Buddy that covers repairs, servicing, and batteries for your hearing aids. The majority of this expenditure is covered by the Australian government and comes at no additional cost to you other than a small yearly fee. </p>
                                                    <p>If you opt out of the yearly maintenance cost, you will be responsible for purchasing batteries and any repair costs to your hearing aid.</p>
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
            <div class="program">
                <div class="know-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Hence, we provide</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="know-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7 d-flex align-items-center">
                                    <div class="know-container">
                                        <div class="know-details">
                                            <p>Transferring and relocating clients from other service providers to Hearing Buddy for our care and services is possible. It’s fairly straightforward and at no cost to you.</p>
                                            <p>Here are a few reasons for relocation, based on our experience:</p>
                                            <p><span>Convenience:</span> You feel visiting one of our sites or requesting a home visit is more convenient for you.</p>
                                            <p><span>Relationship breakdown with your current provider:</span> You’re dissatisfied with the service offered by your current provider.</p>
                                            <p>If you are an existing pensioner already registered in a government programme and interested in relocating, please contact us for additional information</p>
                                            <a class="common-button btn mt-4" href="<?php echo $sSiteURL; ?>contact">Book An Appointment Now </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex align-items-center justify-content-end">
                                    <div class="tinnitud-img">
                                        <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/heroBg1.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="eligible-section">
                <div class="container">
                    <div class="purpose-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Am I eligible ?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>You are eligible for the voucher component of the program if you are an Australian citizen or permanent resident 21 years or older and you are</p>
                                        <ul>
                                            <li>a <a href="#">Pensioner Concession Card holder </a>(eligibility for a PCC does not include people on newstart who are single or couples with no dependents or carer responsibilities).</li>
                                            <li>a <a href="#">Department of Veterans’ Affairs Gold Card</a> holder</li>
                                            <li>a dependent of a person in one of the above categories</li>
                                            <li>a member of the <a href="#">Australian Defence Force</a></li>
                                            <li>referred by the <a href="#">Disability Employment Services</a> (Disability Management Services) Program</li>
                                            <p>Please note that a <span>Seniors Health Card</span> does not provide eligibility for the program.</p>
                                            <p>If you are a <span>young adult aged 21 to 25 (inclusive)</span> you can choose to receive services through either the Voucher Program (if you meet one of the eligibility criteria listed above) or Specialist Hearing Services through Hearing Australia.</p>
                                            <p>You can visit the program’s website at <a href="#">www.hearingservices.gov.au</a> for further information.</p>
                                        </ul>
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

    <script>
        const accordionItemHeaders = document.querySelectorAll(
            ".accordion-item-header"
        );

        accordionItemHeaders.forEach((accordionItemHeader) => {
            accordionItemHeader.addEventListener("click", (event) => {
                // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

                const currentlyActiveAccordionItemHeader = document.querySelector(
                    ".accordion-item-header.active"
                );
                if (
                    currentlyActiveAccordionItemHeader &&
                    currentlyActiveAccordionItemHeader !== accordionItemHeader
                ) {
                    currentlyActiveAccordionItemHeader.classList.toggle("active");
                    currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
                }
                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                } else {
                    accordionItemBody.style.maxHeight = 0;
                }
            });
        });
    </script>

</body>

</html>