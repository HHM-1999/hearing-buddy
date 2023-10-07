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
                    <h1>Understanding How Hearing Works</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>understanding-how-hearing-works">Understanding How Hearing Works</a></li>
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
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="purpose-right">
                                        <p><span>Pause for a moment and consider how remarkable our bodies are at converting noise into sound.</span></p>
                                        <p>It’s a really intricate and difficult system to understand. Is there a specific order in which things happen? Following is a step-by-step breakdown of how individuals hear—from the instant sound waves reach the outer ear, then move through the middle and inner ear and turn into meaningful signals that are conveyed to the brain. These signals are used by our brain to organise and communicate with the outside world. </p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="purpose-left">
                                        <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/Human-Ear-Diagram.jpg" class="img-fluid img100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="values-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Outer Ear: Sound waves travel into the ear</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>The outer ear, also known as the pinna or auricle, receives the sound when it occurs. The pinna is the external component of the ear, and its funnel-like form is well-designed. The pinna filters and amplifies sound waves when they enter the ear canal upon contact with sound.</p>
                                        <p>The tympanic membrane, or eardrum, is then struck by sound waves, causing it to vibrate. Similar to a drum, the eardrum which is like a paper-thin layer of a membrane vibrates when sound waves strike it.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="values-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Middle Ear: The middle ear transmits sound</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>Middle ear is located behind the eardrum. This portion of the ear’s structure amplifies sound waves before transporting them to the inner ear.</p>
                                        <p><span>Here is how this procedure unfolds:</span> The eardrum is connected to the ossicles, a chain of three tiny bones. These three bones are the smallest in the human body and are set in motion when the eardrum vibrates in reaction to sound waves. The malleus (“the hammer”) is the bone that is immediately related to the eardrum, and it is joined to the incus (“the anvil”) at its other end. In turn, the incus is connected to the stapes (the “stirrup” or “footplate”). This last bone, the stapes, is attached to the oval window, which is a membrane between the middle ear and the inner ear. The three bones operate as a lever to enhance sound from the vast tympanic membrane to the small oval window.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="values-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Inner Ear: Sound moves through the inner ear</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>Because the stapes lies in a membrane-covered window in the bony wall that separates the middle ear from the cochlea of the inner ear. As the stapes vibrates, it causes the fluids in the cochlea to flow in a wavelike fashion, stimulating the microscopic “hair cells.” Remarkably, the cochlear ‘hair cells’ are adjusted to respond to different sounds based on their pitch or frequency. Low-pitched noises activate hair cells in the upper portion of the cochlea, while high-pitched sounds stimulate hair cells in the bottom portion. Approximately 16,000 of these hair cells are present at birth, according to the Centres for Disease Control and Prevention (CDC). These hair cells convert the vibrations of sound waves into electrical impulses, which subsequently travel to the brain over a network of nerve fibres.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="expect-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Auditory Processing: Your Brain interprets the signal</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="purpose-right">
                                        <p>When each ‘hair cell’ detects the pitch or frequency of sound to which it is tuned to respond, it generates nerve impulses that travel instantaneously along the auditory nerve. This is even more remarkable because when each ‘hair cell’ detects the pitch or frequency of sound to which it is tuned to respond, it generates nerve impulses that travel instantaneously along the auditory nerve. These nerve impulses follow a complex course in the brainstem before reaching the auditory cortex, the brain’s hearing centre. Here, nerve impulses are translated into audible signals. All of this occurs in a fraction of a second…virtually instantaneously after sound waves enter our ear canals. It is accurate to assert that we eventually hear with our brains.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="video-frame">
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7O-adw-HyrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
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