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
                    <h1>Hearing Aid Fitting & Follow Up – Free</h1>

                </div>

            </div>
        </div>
        <div class="hearing-aid-wrapper">
            <div class="row">
                <div class="col-md-12 pt-5">
                    <div class="heading">
                        <h2>Everything is Hard Before it is Easy – Just Trust the Process</h2>
                    </div>
                </div>
            </div>
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-7 ">
                                    <div class="purpose-right">
                                        <p>Hearing Buddy has the experience and expertise to fit a wide variety of hearing devices currently available in Australia. In our goal of providing the very finest hearing solutions, we continue to study the latest trends and technology in the hearing industry across all manufacturers.</p>
                                        <p>Much like learning anything new a good foundation and small steps are essential. Whether you are an experienced user upgrading to new technology and require time to learn and adjust to new features or an entirely first-time hearing aid wearer, the experience can be overwhelming. Hearing Buddy aims to work with you at your pace to guide you through the process in becoming a confident user. As such, our primary goal is to assure your comfort while avoiding information overload.</p>
                                        <p>To find out more click on the relevant tab below.</p>
                                    </div>
                                </div>
                                <div class="col-md-5 d-flex justify-content-end align-items-center ">
                                    <div class="purpose-right  ">
                                        <div class="tinnitud-img pt-0">
                                            <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/audiometrist-vs-audiologist-753x753.jpg" class="img-fluid ">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="accordion faq-page" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    FITTING & FOLLOW UP PROCESS
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="accordian-desc">
                                                        <h3>Hearing Aid Check</h3>
                                                        <p>Your brand-new Hearing Aids will be ready and assembled with appropriate wires, tubes, moulds or domes as indicated at the Hearing aid consultation, and the model, colour and required specs will be confirmed prior to fitting.</p>
                                                        <p>The Hearing aids will then be tried on your ears to check for comfort and best fit and to see if any changes are needed. Incorrect parameters can impact both the comfort and sound quality of a hearing device.</p>
                                                        <h3>Feedback Test</h3>
                                                        <p>As your Hearing Aids are brand new, we need to first calibrate them. This is to ensure any feedback is taken care of which can otherwise result in hearing whistling sounds.</p>
                                                        <h3>Fitting </h3>
                                                        <p>The Hearing aids are now ready for fitting, and this will be done using one of the fitting prescriptions based on your latest Audiogram.</p>
                                                        <h3>Verification – Real Ear Measures</h3>
                                                        <p>Certain practitioners skip Real ear measurements to save time. Using real-ear measurements, it is feasible to objectively verify the accuracy and usefulness of a hearing aid fitting. Because each of us has a unique ear canal shape, the way sounds reach the eardrum varies. Rather than making assumptions about the “real” amount of sound, we evaluate and measure the amount of sound that reaches the eardrum.</p>
                                                        <h3>Validation – Sound and Comfort Check</h3>
                                                        <p>Based on the prescribed fitting the sound quality, clarity, loudness, and balance will be checked objectively and adjusted to ensure comfort and clarity. In other words, Validation of hearing aids which is a subjective measure that captures the hearing aid user’s perceived benefit, satisfaction, and handicap reduction by the use of hearing aids. At the follow-up appointment, the hearing aids are further validated using both Aided and Unaided Speech Tests to demonstrate the improvement achieved with amplification.</p>
                                                        <h3>Hearing Aid Management</h3>
                                                        <p>As our goal is not to overwhelm you with information, we begin by covering the fundamentals and then advance to more specific material. Typically, for initial fits, we want to allow adequate time to practise proper Hearing Aid insertion and removal, as well as battery/charging (if applicable) and basic maintenance. Additionally, our 60-day unlimited follow-up period gives you ample time and opportunities to develop into a confident user.</p>
                                                        <h3>Realistic Expectations and Strategies </h3>
                                                        <p>As hearing aids are merely a tool for assisting you in hearing better and cannot restore your hearing to normal, there will always be some limitations, and we must have realistic expectations along with appropriate strategies for assisting hearing aids in assisting you in hearing better in challenging situations. This is covered at the hearing aid consultation when establishing your COSI goals (Client oriented scale of improvement) which helps in selecting the right technology level and helps in programming of hearing aids at fitting with an intention to achieve these goals. The goals need to be SMART that is Specific, Measurable, Achievable, Realistic and Timely.</p>
                                                        <p>This is also revisited at follow up appointments to score the perceived benefit.</p>
                                                        <h3>Advice and Counselling</h3>
                                                        <p>Hearing is very complex, and our environment is always changing hence we need to allow time for your brain to acclimatise and adapt to various settings, new sounds, sounds that you have been missing. Hence, we advise for you to be patient, consistent, and not to over-challenge yourself. It is better to wear hearing aids for 4 hours a day everyday rather than wearing them for 12hrs every other day.</p>
                                                        <h3>Next Steps</h3>
                                                        <p>Now that your hearing aids have been properly configured, it’s time to put them to the test in the real world. Following your fitting, a follow-up visit will be scheduled within 2-3 weeks. It is important to attend this appointment as at this session, you will be able to share your experiences with your new hearing device(s) and based on your feedback your Clinician will be able to finetune your hearing aids and make any necessary adjustments to suit your needs.</p>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        MONEY BACK GUARANTEE
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="accordian-desc">
                                                          <div class="purpose-right">
                                                          <p>Hearing Buddy offers a 60 day change of mind return period from the date you are receiving the device(s). During this period it is important that you attend appointments as required to ensure that your hearing devices are adjusted to suit your needs and that you are able to manage them correctly.</p>
                                                            <ul>
                                                                <li>If, within the 60 day change of mind return period, you decide you do not wish to keep the hearing device(s), it is your responsibility to ensure that you return them and all accessories in original condition to Hearing Buddy. Hearing Buddy will refund any payments made by you associated with the hearing device(s) within 2 weeks.</li>
                                                                <li>If the devices are returned in a damaged condition, Hearing Buddy may in its sole discretion retain payment of the hearing device(s) and/or claim from you any outstanding balance on the cost of the hearing device(s).</li>
                                                                <li>The 60 day change of mind return period does not impact and is in addition to your statutory consumer law rights, and any product warranty offered with the device(s).</li>
                                                            </ul>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        WHY FOLLOW UP’s ARE IMPORTANT
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="accordian-desc">
                                                           <div class="purpose-right">
                                                            <p>It’s not always simple to get a good hearing aid fit, and it virtually never happens after only one hearing aid fitting. To ensure long-term satisfaction with your hearing aids, follow-up appointments are just as crucial as the first fitting. Here are at least a few reasons why hearing aid follow ups are beneficial to you.</p>
                                                            <h3>A Chance to Ask Questions & Address Issues</h3>
                                                            <p>Even if your hearing aids are working well, there’s always space for improvement. The first few weeks and months of wearing hearing aids are crucial. In the real world, your hearing aids will be tested for comfort and functionality. Following your initial fitting, a follow-up session allows to fine-tune and optimise your hearing aids even more for an even better listening experience.</p>
                                                            <h3>Possibility to Acquaint Oneself with New Features and Tactics</h3>
                                                            <p>Modern hearing aids offer so much that it’s practically hard to explain and understand everything about them in a single sitting. Bluetooth connections, mobile phone apps, TV streams, and geotagging are just some of the features that may be available, and although these may be simple for some, they may be challenging for someone who is not tech savvy. A follow-up appointment establishes additional lines of communication and provides opportunity for learning, ensuring that no one is left alone.</p>
                                                            <h3>Provides Ongoing Counselling and Support</h3>
                                                            <p>Managing and adapting to hearing aids, particularly in the first few days, can be uncomfortable and disruptive to your normal routine. While it is natural to feel this way, you are not alone. We’re here to give you the tools you need to succeed and to inspire you to keep learning. As a result, if you have any questions or concerns over your hearing aids, or anything else you’d like us to revisit, please let us know.</p>

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