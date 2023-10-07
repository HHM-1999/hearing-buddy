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
                    <h1>Privacy Policy</h1>
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
                                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $sSiteURL; ?>privacy-policy">Privacy Policy</a></li>
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
                            <div class="privacy-policy-area">
                            <div class="purpose-section">
                                <div class="purpose-wrapper">
                                    <div class="row">
                                        <div class="col-md-12 d-flex align-items-center">
                                            <div class="purpose-right">
                                                <p>This <a href="#">Privacy Policy</a> applies to Eakom Pty. Ltd (ABN 36158701181) trading as Hearing Buddy (“we”, “us”, “our”).</p>
                                                <p>We are committed to protecting your privacy and complying with all applicable privacy laws, including the Australian Privacy Principles. This Policy describes how we collect, handle, and use your personal information, how you can request access to or correction of your personal information, and how you can file a complaint if you believe we have violated your privacy.</p>
                                                <p>“Personal Information” refers to information or an opinion about an identified or reasonably ascertainable individual.</p>
                                                <p>“Sensitive information” is a subcategory of Personal Information and includes information or an opinion about your health, race or ethnicity, religious beliefs or affiliations, sexual orientation or practices, criminal record, political opinions, membership in a political or trade association, or philosophical beliefs.</p>
                                                <h3>Use and collection of personal information</h3>
                                                <p>As a provider of hearing services, we only gather the personal information that is absolutely necessary and reasonably required for the tasks that we perform.</p>
                                                <p>This includes but is not limited to your name, address, birth date, phone number (landline or mobile), email address, gender, Pensioner number, Department of Veterans’ Affairs number, and payment details. In some cases, we may acquire Personal Information that is considered Sensitive.</p>
                                                <p>“Sensitive Information” may contain information or an opinion regarding your hearing and health condition and history, or your race or ethnicity. We may additionally collect indigenous and culturally and linguistically diverse identifiers to improve our ability to provide culturally appropriate services to clients (e.g., use of interpreters or specialist officers)</p>
                                                <p>Many features of the site may be seen without giving personal information, however access to Hearing Buddy customer service requires submission of personally identifying information.</p>
                                                <p>We may use the personal information we gather to gain a deeper understanding of your behaviours, interests, and habits, as well as to assess if alternative services or products may better meet your needs.</p>
                                                <p>You are under no obligation to supply the requested information. Nevertheless, if you opt not to supply some information, we may be unable to provide you with the services or products that rely on the gathering of that information.</p>
                                                <p>On occasion, we may collect and use cookies on our website, which may also be used by the websites that house our online adverts. By modifying your web browser, you can disable the cookie setting.</p>
                                                <h3>Disclosure of Your Personal Information</h3>
                                                <p>On occasion, we may employ other businesses to perform services on our behalf, including but not limited to addressing customer service inquiries, processing transactions, and transporting client freight. These companies will be permitted to collect just the personal data necessary for service delivery.</p>
                                                <p>Hearing Buddy takes reasonable precautions to guarantee that these third parties are obliged by confidentiality and privacy obligations regarding the security of your personal information.</p>
                                                <p>Your Personal Information may be collected by us when you:</p>
                                                <ul>
                                                    <li>Attend hearing screenings or hearing assessments.</li>
                                                    <li>Fill out application, consent, or other forms.</li>
                                                    <li>Request that we complete applications on your behalf (e.g., online voucher applications).</li>
                                                    <li>We may also gather Personal Data about you from third-party sources (such as your medical provider). However, before to doing so, we will ask your permission, unless Australian law authorises or requires us to gather the information.</li>
                                                    <li>We might also acquire Personal Data about you from other sources (eg. family members or legal guardians). However, we will only acquire your Personal Information in this manner if it is difficult or impracticable to obtain this information directly from you, or if you or the law otherwise authorises us to do so.</li>
                                                    <li>We are devoted to continuous development and may, from time to time, request more information (e.g., via customer satisfaction surveys, market research, or special offers) in order to enhance our services and address the broader needs of our clients and potential clients.</li>

                                                </ul>
                                                <h3>How We Handle Your Personal Data </h3>
                                                <p>We may use your Personal Information for the primary objective as well as the following secondary purposes:</p>
                                                <p>Verifying your identity; assessing your eligibility for the Australian Government Hearing Services Program (through the Department of Health); applying to the Department of Health for a hearing services voucher on your behalf and managing your Personal Information on their online system; contacting your health practitioner to arrange a referral appointment for a hearing assessment or other related service; assessing your ongoing needs; ordering and administering products; and reviewing your ongoing needs (including requests under the Freedom of Information Act, the Privacy Act and under various confidentiality provisions under which we operate).</p>
                                                <p>With your consent, we may also use your information for other purposes, including (but not limited to): conducting market research, product development, or customer satisfaction surveys; statistical analysis to improve service delivery; and contacting you with information about marketing products, services, and events we believe you may be interested in.</p>
                                                <h3>How Do We Store Personal Data </h3>
                                                <p>The safety and security of your Personal Data is a top priority for us. All Personal Information in our possession, whether in hard copy or electronic format, is stored securely. Only authorized workers or contractors have access to your Personal Information if it pertains to their job roles.</p>
                                                <p>Using a variety of technical solutions, such as firewalls and anti-virus software, we prevent unauthorized use or disclosure of information held electronically. We only retain Personal Information for as long as the law requires or if it is necessary for our business duties and activities.</p>
                                                <h3>Alterations To Our Privacy Statement</h3>
                                                <p>Eakom Pty Ltd trading as Hearing retains the right to modify this Privacy Statement at any time. If you disagree with the Privacy Statement, you should not use or access the Site.</p>
                                                <h3>Obtaining Your Private Information</h3>
                                                <p>Your right to view your personal information is subject to legal exceptions. If you are interested in doing so, please let us know. For security concerns, you may be requested to submit your request in writing. Eakom Pty Ltd reserves the right, on a per-request basis, to charge a fee for looking for and providing access to your information.</p>
                                                <h3>Queries and Complaints</h3>
                                                <p>If you have a question or concern about how we have handled your Personal Information, please contact us at</p>
                                                <h3>Hearing Buddy</h3>
                                                <h3>138 Stradbroke Road, Rostrevor, South Australia 5073, </h3>
                                                <p>or</p>
                                                <h3>Email at <a href="mailto:Info@hearingbuddy.com. au">Info@hearingbuddy.com. au</a></h3>
                                                <p>Please give the following information so we can address your question or concern thoroughly:</p>
                                                <ul>
                                                    <li>A summary of the alleged privacy breach or privacy concern, including information about where the suspected privacy breach or privacy concern happened (business name and location) and with whom you have communicated with the matter.</li>
                                                    <li>Copies of all necessary documentation related to the complaint.</li>
                                                </ul>
                                                <p>We make every effort to react to complaints in a timely manner. If you are unhappy with our response, you may direct your complaint to the Australian Information (Privacy) Commissioner (see <a href="#">www.oaic.gov.au</a> ).</p>
                                                <p>Hearing Services Program by calling <a href="tel:1800 500 726">1800 500 726</a></p>
                                                <p>or the National Disability Insurance Scheme by calling <a href="tel:1800 800 100">1800 800 100</a></p>
                                                <p>Please allow us to attempt to address any issues before contacting them. Assuring you of our constant support and service.</p>
                                                <p>Eakom Pty Ltd ABN:36158701181 | Web: <a href="#">www.hearingbuddy.com.au</a> | Ph: <a href="tel:0468767370">0468767370</a> | </p>
                                                <p>Email: <a href="mailto:info@hearingbuddy.com.au">info@hearingbuddy.com.au</a></p>
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



    </main>

    <?php include_once "common/footer.php"; ?>

    <?php echo $sJSjQuery;
    echo $sPopper;
    echo $sJSBootStrap;
    echo $sJSEMM;
    ?>
</body>

</html>