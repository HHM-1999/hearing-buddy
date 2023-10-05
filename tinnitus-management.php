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
                    <h1>Tinnitus Management</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>tinnitus-management">Tinnitus Management</a></li>
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
                                    <h2>Tinnitus Treatment: Finding Relief from Persistent Ringing in the Ears</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>Tinnitus is a condition characterized by the perception of sound without any external source. This phantom noise can range from a low hum to a high-pitched ringing and can be intermittent or constant, significantly impacting an individual's quality of life. Fortunately, there are numerous treatment options available to help manage tinnitus and provide relief to those affected by this persistent condition.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="expect-area">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Treatment Approaches</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-left">
                                        <h3>Hearing aids have three basic components:</h3>
                                        <div class="purpose-right">
                                            <p>One of the first steps in tinnitus treatment is a thorough examination by a qualified healthcare professional. They will assess the severity of the condition, identify any underlying causes, and determine the best course of action. In some cases, addressing the root cause of tinnitus can alleviate the symptoms. For example, if tinnitus is caused by an earwax blockage or a middle ear infection, appropriate medical intervention can resolve the issue and alleviate the accompanying ringing sensation. </p>
                                            <p>When no underlying cause can be identified, or if the tinnitus persists despite treatment of the underlying cause, other treatment approaches come into play. Here are some commonly employed methods for managing tinnitus: </p>
                                            <p><span>Sound therapy: </span> This approach aims to mask or distract from the perception of tinnitus by introducing external sounds. White noise machines, fans, or specially designed tinnitus maskers can help provide relief by creating a more soothing auditory environment. Additionally, using hearing aids can amplify ambient sounds, making the tinnitus less noticeable.</p>
                                            <p><span>Cognitive behavioral therapy (CBT) :</span> Tinnitus can have a significant psychological impact, leading to anxiety, stress, and sleep disturbances. CBT helps individuals develop coping strategies and change negative thought patterns associated with tinnitus, ultimately reducing its impact on daily life.</p>
                                            <p><span>Medications:</span> Certain medications, such as tricyclic antidepressants, antianxiety drugs, and even some anticonvulsants, have been found to be helpful in managing tinnitus for some individuals. However, it's essential to consult a healthcare professional before starting any medication, as the effectiveness and potential side effects can vary.</p>
                                            <p><span>Tinnitus retraining therapy (TRT):</span> TRT combines sound therapy and counseling to help individuals habituate to the presence of tinnitus and reduce their emotional response to it. By using a sound generator and regular counseling sessions, TRT aims to retrain the brain's perception of tinnitus, making it less bothersome over time.</p>
                                            <p><span>Alternative therapies: </span> Some individuals find relief from tinnitus through alternative therapies such as acupuncture, hypnosis, or herbal supplements. While the evidence supporting these approaches is limited, they may be worth exploring on an individual basis, under the guidance of a healthcare professional.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="know-area">
                <div class="know-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 d-flex align-items-center">
                                <div class="text-container">
                                    <div class="know-details">
                                        <h3>Finding the Right Treatment</h3>
                                        <p>Hearing loss affects individuals of all ages and is more prevalent than one might assume. According to the World Health Organization (WHO), at least 360 million individuals are affected by hearing loss, and that’s just the number of documented cases. Currently, one in six Australians suffers from some sort of hearing loss, and this proportion is expected to climb dramatically! It is anticipated that by 2050, one in four Australians will have a hearing impairment.</p>
                                    </div>
                                    <div class="know-details">
                                        <h3>Living with Tinnitus</h3>
                                        <p>Living with tinnitus can be challenging, but with the right treatment and support, relief is possible. Seeking professional help, exploring various treatment options, and adopting healthy coping mechanisms can significantly improve one's quality of life. Remember, you are not alone in this journey, and there are resources available to help you navigate through the persistent ringing in your ears.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 d-flex align-items-center justify-content-center">
                                <div class="tinnitud-img">
                                    <img class="img-fluid" src="<?php echo $sSiteURL; ?>media/imgAll/bg/tinnitus-hearing-buddy-australia-684x684.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="know-tinnitus ">
                <div class="container">
                    <div class="purpose-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Did You Know ?</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>Tinnitus is a condition characterized by the perception of sound without any external source. This phantom noise can range from a low hum to a high-pitched ringing and can be intermittent or constant, significantly impacting an individual's quality of life. Fortunately, there are numerous treatment options available to help manage tinnitus and provide relief to those affected by this persistent condition.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>How Sound Works</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-6 d-flex align-items-center">
                                    <div class="purpose-right">
                                        <p>Tinnitus is a condition characterized by the perception of sound without any external source. This phantom noise can range from a low hum to a high-pitched ringing and can be intermittent or constant, significantly impacting an individual's quality of life. Fortunately, there are numerous treatment options available to help manage tinnitus and provide relief to those affected by this persistent condition.</p>
                                        <p><span>Note: As with all videos, please make sure your volume on your computer is turned down to a comfortable volume.</span></p>
                                    </div>
                                </div>
                                <div class="col-md-6 d-flex align-items-center justify-content-end">
                                    <div class="video-frame">
                                        <iframe title="Journey of Sound to the Brain" src="https://www.youtube.com/embed/eQEaiZ2j9oc?feature=oembed" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" width="500" height="400" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="types-tinnitus">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>tinnitus-and-hearing">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/tinitus-dark.jpg" alt="">
                                    </div>
                                    <div class="service-details">
                                        <h3>Tinnitus And Hearing: The Connection</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>types-of-tinnitus">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/tinnitus-signs-dark.jpg" alt="">
                                    </div>
                                    <div class="service-details">
                                        <h3>Types of Tinnitus</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>causes-of-tinnitus">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/causes-of-tinitius2.jpg" alt="">
                                    </div>
                                    <div class="service-details">
                                        <h3>Causes Of Tinnitus</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="servcie-wrapper">
                                <a href="<?php echo $sSiteURL; ?>managing-tinnitus">
                                    <div class="service-img">
                                        <img class="img-fluid w-100" src="<?php echo $sSiteURL; ?>media/imgAll/bg/managin-tinitus2.jpg" alt="">
                                    </div>
                                    <div class="service-details">
                                        <h3>Managing Tinnitus</h3>
                                    </div>
                                    <div class="goto-icon">
                                        <i class="fas fa-arrow-right"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="measuring-section">
                <div class="container">
                    <div class="purpose-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Measuring Tinnitus</h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>Tinnitus is a subjective disorder, but there are clinical approaches to assess its audiometric and psychological consequences. The first step in treating tinnitus is to properly diagnose it. Here are some tests that hearing professionals can use to assess tinnitus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="purpose-section">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="heading">
                                    <h2>Audiometric Testing of Hearing Loss and Tinnitus </h2>
                                </div>
                            </div>
                        </div>
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p>Tinnitus can be evaluated and diagnosed by audiologists and other hearing health professionals. Because tinnitus is frequently caused by hearing loss, most clinicians begin with a full audiological evaluation. Typical hearing exams are:</p>
                                        <p><span>Speech recognition test:</span> A subjective assessment of a patient’s ability to hear and repeat certain words. Occasionally referred to as speech audiometry.</p>
                                        <p><span>Pure tone audiogram</span> is a subjective test that assesses the patient’s hearing across a range of frequencies (in Hertz) and loudness (measured in decibels).</p>
                                        <p><span>Tympanogram:</span> An objective test that evaluates the middle ear’s function, specifically the tympanic membrane’s and conduction bones’ mobility.</p>
                                        <p><span>Acoustic reflex testing:</span> An objective test that assesses the response of the middle ear muscles to loud noises.</p>
                                        <p><span>Otoacoustic emission testing:</span> The objective measurement of hair cell movement within the inner ear using extremely sensitive microphones.</p>
                                        <p>It is critical to ascertain the precise gaps in a tinnitus patient’s hearing, as this frequently correlates with the form and quality of their tinnitus. (For example, high-frequency hearing loss frequently occurs in conjunction with high-frequency tinnitus.) Additionally, unique hearing markers may provide insight into various tinnitus therapy alternatives.</p>
                                        <p>Hearing health specialists utilise an additional battery of tests when examining tinnitus situations. While there is no objective means to diagnose tinnitus at the moment, there are numerous protocols for assessing the patient’s subjective experience of tinnitus sound, pitch, and volume. To be more precise, the clinician may conduct the following tests:</p>
                                        <p><span>Tinnitus Sound Matching:</span> Patients are presented with typical tinnitus sounds in order to assist them in identifying their unique tinnitus experience. The health care provider may alter the pitch and layer various sounds to generate a precise audio representation of the tinnitus. Appropriate matching establishes a critical foundation for later tinnitus management therapy, which are frequently tailored to the unique characteristics of each patient.</p>
                                        <p><span>Minimum Masking Level:</span> The volume at which external narrowband noise conceals (or covers) the perception of tinnitus. The minimum masking level provides an approximation of how loud a patient feels his or her tinnitus and can be used in later tinnitus masking and sound therapy.</p>
                                        <p><span>Loudness Discomfort Level:</span> The volume at which external sound becomes uncomfortable or painful for a tinnitus patient. Sound therapy, masking, and hearing aids are all possible tinnitus treatments. Determining loudness discomfort levels is critical for those with severe noise sensitivity.</p>
                                        <p>Additional tests may be ordered based on the patient’s symptoms, medical history, and/or risk factors. An MRI (magnetic resonance imaging) may be required in extreme cases of tinnitus but should only be used when independent clinical evaluation shows particular (rare) tinnitus etiologies.</p>
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