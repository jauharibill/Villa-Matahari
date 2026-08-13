<?php
// Partial <head> — meta SEO, OG, Twitter, JSON-LD (TouristAccommodation)
$title = htmlspecialchars($site['name'] . ' | Villa Kota Batu', ENT_QUOTES, 'UTF-8');
$desc  = htmlspecialchars($site['description'], ENT_QUOTES, 'UTF-8');
$canon = htmlspecialchars($site['canonical'], ENT_QUOTES, 'UTF-8');
$ogimg = htmlspecialchars($site['og_image'], ENT_QUOTES, 'UTF-8');
$siteName = htmlspecialchars('BATU Teknologi', ENT_QUOTES, 'UTF-8');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $desc; ?>">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?php echo $canon; ?>">
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:site_name" content="<?php echo $siteName; ?>">
    <meta property="og:url" content="<?php echo $canon; ?>">
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $desc; ?>">
    <meta property="og:image" content="<?php echo $ogimg; ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $desc; ?>">
    <meta name="twitter:image" content="<?php echo $ogimg; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<?php
$ld = array(
    '@context' => 'https://schema.org',
    '@type'    => 'TouristAccommodation',
    'name'     => $site['name'],
    'description' => $site['description'],
    'url'      => $site['canonical'],
    'address'  => array(
        '@type'           => 'PostalAddress',
        'addressLocality' => $site['location'],
        'addressRegion'   => 'Jawa Timur',
        'addressCountry'  => 'ID',
    ),
    'amenityFeature' => array_map(function ($f) {
        return array('@type' => 'LocationFeatureSpecification', 'name' => $f['label']);
    }, $site['facilities']),
    'aggregateRating' => array(
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '120',
    ),
);
?>
<script type="application/ld+json">
<?php echo json_encode($ld, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
</script>
