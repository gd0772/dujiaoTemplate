<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($page_title) ? $page_title : '' }} | {{ dujiaoka_config_get('title') }}</title>
    <meta name="Keywords" content="{{ dujiaoka_config_get('keywords') }}">
    <meta name="Description" content="{{ dujiaoka_config_get('description')  }}">
    @if(\request()->getScheme() == "https")
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @endif
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/font-awesome.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/slick.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/slick-theme.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/ionrangeslider.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/vendor/aksVideoPlayer.css" />
    <link rel="stylesheet" href="/assets/riniba_01/css/app.css" />
</head>

