<!doctype html>
<html ⚡ lang="zh-Hant-TW">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">

  <link rel="shortcut icon" href="amp_favicon.png">
  <link rel="canonical" href="{{ route('content', $post_id) }}">

  <title>{{ $title }}</title>

  <style amp-boilerplate>
    body {
      -webkit-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -moz-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      -ms-animation: -amp-start 8s steps(1, end) 0s 1 normal both;
      animation: -amp-start 8s steps(1, end) 0s 1 normal both
    }

    @-webkit-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-moz-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-ms-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @-o-keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }

    @keyframes -amp-start {
      from {
        visibility: hidden
      }

      to {
        visibility: visible
      }
    }
  </style><noscript>
    <style amp-boilerplate>
      body {
        -webkit-animation: none;
        -moz-animation: none;
        -ms-animation: none;
        animation: none
      }
    </style>
  </noscript>
  <style amp-custom>
    body {
      width: auto;
      margin: 0;
      padding: 0;
    }

    header {
      background: black;
      color: white;
      font-size: 2em;
      text-align: center;
    }

    h1 {
      margin: 0;
      background: white;
      /* box-shadow: 0px 3px 5px grey; */
    }

    h4 {
      box-shadow: 1px 1px 1px grey;
    }

    p {
      padding: 0.5em;
      margin: 0.5em;
    }
  </style>
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://example.com/my-article.html"
      },
      "headline": "My First AMP Article",
      "image": {
        "@type": "ImageObject",
        "url": "https://example.com/article_thumbnail1.jpg",
        "height": 800,
        "width": 800
      },
      "datePublished": "2015-02-05T08:00:00+08:00",
      "dateModified": "2015-02-05T09:20:00+08:00",
      "author": {
        "@type": "Person",
        "name": "John Doe"
      },
      "publisher": {
        "@type": "Organization",
        "name": "⚡ AMP Times",
        "logo": {
          "@type": "ImageObject",
          "url": "https://example.com/amptimes_logo.jpg",
          "width": 600,
          "height": 60
        }
      },
      "description": "My first experience in an AMPlified world"
    }
  </script>
</head>

<body>
  <header>
    <a style="text-decoration:none;color:white" href="{{ route('content', $post_id) }}">
      <h3>寶貝命名網</h3>
    </a>
  </header>
  <article>


    <amp-img src="https://storage.googleapis.com/luckynaming/9m2n4FRuOktpGl3U4u029kLYdMigYG6fnUGOqXZC.jpeg" width="266" height="150" layout="responsive"></amp-img>
    <h1 style="padding: 6%;">{{ $title }}</h1>

    <h4 style="padding: 5%;"> {!! $sub_title !!} </h4>
    <div style="padding: 5%;">
      {!! $content !!}
      <a href="{{ route('index') }}">
        <p style="text-align: right;color:black">
          前往獲取好名>>
        </p>
      </a>
    </div>

  </article>

</body>

</html>