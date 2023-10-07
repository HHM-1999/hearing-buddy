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
                    <h1>Communicating And Supporting People With Hearing Loss</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>communicating-and-supporting-people-with-hearing-loss">Communicating And Supporting People With Hearing Loss</a></li>
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
                                        <p>Hearing impaired people often report being misunderstood as harsh, aloof, or even unintelligent. They may even begin to avoid formerly enjoyable social activities, especially those in noisy settings. This might make sufferers cranky and angry.</p>
                                        <p>However, hearing loss also affects the affected individual’s family, friends, and workplace. While we strongly encourage that decisive actions, such as organising a hearing test and treatment, be taken, enhancing understanding of the most effective communication tactics also plays a significant role in keeping peace.</p>
                                        <p>As a result, successful communication is dependent on everyone’s efforts. It is essential that all parties involved in the communication process, regardless of whether the person with hearing loss uses hearing aids or active listening tactics, continuously practice good communication strategies, such as those listed here:</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="purpose-right">
                                        <img src="<?php echo $sSiteURL; ?>media/imgAll/bg/jobs-in-dorset-1255x837-1-1024x683.jpg" class="img-fluid img100">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="purpose-right">
                                        <p><span>Positioning Yourself:</span> Hearing-impaired people rely heavily on lip-reading and non-verbal clues therefore choose a well-lit are, sit face to face and position yourself where they can see your face. Remember that if the hearing-impaired listener hears better in one ear than the other, it’s important to position yourself on that ear’s side.</p>
                                        <p><span>Avoid Talking From Distance:</span> Not being able to see each other when conversing is a common cause of communication difficulties.</p>
                                        <p><span>Don’t Yell:</span> Do not raise your tone but get closer. Speech understanding may be more difficult and harder to understand if you shout. Speak clearly, slowly and be patient.</p>
                                        <p><span>Get Their Attention:</span> Begin a conversation by addressing the other person by name. This provides the listener a chance to focus their attention and decreases the risk of misunderstanding words at the start of the conversation.</p>
                                        <p><span>Avoid Rushing:</span> Slow down, pause between sentences or phrases, and wait to be understood before continuing.</p>
                                        <p><span>Avoid using long sentences:</span> Remember to not complicate your messages in the conversation. Slow down between sentences.</p>
                                        <p><span>Don’t Cover Your Face:</span> Speech will be more difficult to understand if you are eating, chewing, or smoking when you’re talking. It makes them hard to understand what you’re trying to say.</p>
                                        <p><span>Be patient:</span> Remember that even if they can hear your voice, they may have trouble understanding certain terms.</p>
                                        <p><span>Minimise Background Noise:</span> Most hearing challenged people struggle to interpret speech in noisy environments. When chatting, reduce background noise. Prepare to walk to a better atmosphere and choose quieter restaurants.</p>
                                        <p><span>Avoid Loud Sounds:</span> Extreme sensitivity to loud noises is common among those who suffer from hearing loss. It’s best to avoid loud noises whenever feasible.</p>
                                        <p><span>Avoid Over Repeating:</span> If the Hearing-impaired person has trouble understanding a phrase or word, try stating it differently rather than repeating it.</p>
                                        <p><span>Familiarize the listener:</span> Give an overview of the conversation’s main points. Make sure to avoid abrupt shifts in topic. Tell the individual with hearing loss what you’re talking about now if the topic is changed. If you’re in a group conversation, rephrase crucial questions or information before proceeding.</p>
                                        <p><span>Providing Information:</span> If you are providing precise information to someone with hearing impairment, such as time, location, or phone numbers, ask them to repeat it back to you. Numbers and words often rhyme. Provide essential information, such as directions, schedules, and instructions, in writing whenever possible.</p>
                                        <p><span>Be Empathetic:</span> Compassion is something you should always strive to cultivate.</p>
                                        <p>It’s difficult for everyone, but it’s especially difficult for the elderly or those with hearing impairments. Depression and dementia are common side effects of untreated hearing loss. Understanding your loved one’s condition will help you better understand what they are going through. Therefore, having the ability to empathise with your loved one’s circumstance is essential.</p>
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