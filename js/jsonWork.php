[{
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Workaround",
    "url": "<?php bloginfo("wpurl") ?>",
    "logo": "<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpeg",
    "sameAs" : [
        "https://www.facebook.com/workar0und",
        "http://www.twitter.com/workar0und",
        "https://plus.google.com/u/0/112726639998674323896/"
    ]
    },
    {
        "@context" : "http://schema.org",
        "@type": "WebSite",
        "url": "<?php bloginfo("wpurl") ?>/?s={search_term_string}<?php $search_query = get_search_query() ?>",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "<?php bloginfo("wpurl") ?>/?s={search_term_string}",
            "query-input": "required name=search_term_string"
        }
  
  
  
}]