<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Success</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/color.min.css') }}" rel="stylesheet" />

</head>

<body class="pace-top">

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>


    <div id="app" class="app">

        <div class="error">
            <div class="error-code">
                @if($success)
                    SEND
                @endif
            </div>
            <div class="error-content">
                <div class="error-message mb-5">{{ $success }}</div>
                <div>
                    <a href="{{ route('wiseindex') }}" class="btn btn-success px-3">Go Home</a>
                </div>
            </div>
        </div>

        <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>

    </div>


    <script src="{{ asset('js/vendor.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="{{ asset('js/color.min.js') }}" type="9dd2961859eb1e28de60110d-text/javascript"></script>
    <script src="{{ asset('js/rocketloader.min.js') }}" data-cf-settings="9dd2961859eb1e28de60110d-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"849cd0090baf0445","r":1,"version":"2024.1.0","token":"4db8c6ef997743fda032d4f73cfeff63"}' crossorigin="anonymous"></script>
</body>

</html>