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
                    <h1>Terms & Conditions</h1>
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
                                <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>terms-&-conditions">Terms & Conditions</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="hearing-health-area">
            <div class="hearing-aid-wrapper">
            <div class="our-purpose-area">
                <div class="container">
                    <div class="purpose-section">
                        <div class="purpose-wrapper">
                            <div class="row">
                                <div class="col-md-12 d-flex align-items-center">
                                    <div class="purpose-right">
                                    <p>SThese terms and conditions apply to all legal acts between Hearing Buddy and Client, including all offers made by Hearing Buddy, all agreements between Hearing Buddy and Client, and to the execution thereof. In the event that the applicability of these terms and conditions is established in respect of any transaction between Client and Hearing Buddy, these terms and conditions will be deemed to have been met by operation of law in all subsequent transactions with Client in question. Terms and conditions of Client, including purchase terms and conditions, do not apply and their applicability is expressly rejected unless and insofar as Hearing Buddy has explicitly agreed to their applicability in writing. Additions to or deviations from these terms and conditions only apply if and insofar as these have been confirmed in writing by Hearing Buddy to Client, only relate to the specific transaction for which they have been agreed and cannot be invoked in other transactions. Should any provision of these terms and conditions prove to be null and void or voidable, the other provisions of these terms and conditions will remain in full force and effect, while Hearing Buddy will at all times be entitled to replace the provision in question with another provision of similar purport. Commercial terms, used in quotations, order confirmations or otherwise, will be interpreted in accordance with the International Rules for the Interpretation of Commercial Terms produced by the International Chamber of Commerce (Incoterms), as in force at the time of the conclusion of the agreement.</p>
                                    <h3>Offers and agreements</h3>
                                    <p>All offers, quotations, images, catalogues, sizes, weights, colours and other information provided by Hearing Buddy are without obligation and can only be considered as an invitation to Client to make a further offer. Without prejudice to the foregoing, unless explicitly stated otherwise, quotations are valid for a period of thirty days only. All indications in offers, quotations or agreements and the appendices thereto, such as (but not limited to) illustrations, drawings, sizes, weights, yields, and colours, as well as the properties of any trial copies or samples provided, are indicative only. Minor deviations are therefore not at the risk and expense of Hearing Buddy and no rights can therefore be derived from them by Client. An agreement between Hearing Buddy and Client will only be concluded after an order has been confirmed in writing by Hearing Buddy, or after Hearing Buddy has actually started the execution of the order in whole or in part. Verbal commitments by and agreements with subordinates of Hearing Buddy do not bind Hearing Buddy until and insofar as they have been confirmed in writing by Hearing Buddy. If Client does not agree with the order confirmation, this will be notified to Hearing Buddy in writing within five days, failing which the order confirmation will become irrevocable and any additional costs resulting from a subsequent change desired by Client will be for Client’s account. Obvious mistakes or errors in offers by Hearing Buddy release Hearing Buddy from its obligation to fulfil its obligations and/or any obligations to pay compensation ensuing therefrom, even after the conclusion of the agreement. In the event that the agreement is cancelled by Client after the conclusion of the agreement, for whatever reason, or is terminated by Hearing Buddy due to an attributable shortcoming on the part of Client, all costs already incurred by Hearing Buddy, as well as the amount of loss of profit and other damage, will be for the account of Client. If the order is given on behalf of a legal entity, the person giving the order is jointly and severally liable for the fulfilment of the obligations towards Hearing Buddy created on behalf of the legal entity in question. Client and its personnel will observe secrecy towards third parties who are not involved in the execution of the order of all information of a confidential nature (including drawings, models, constructions, diagrams and further business information and know-how) of Hearing Buddy, in the broadest sense of the word, which has been made available to Client by Hearing Buddy or has been brought to Client’s knowledge. These products will be returned at Hearing Buddy’s first request and without delay.</p>
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