<!-- https://bootstrapexamples.com/@valeria/404-page-template-2 -->
<!doctype html>
<html lang="en">
<head>
    <base href="<?= base_url('/'); ?>">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?= base_url('/assets/img/favicon.png'); ?>">
    <title>404 - Page not found</title>
    <link rel="stylesheet" href="<?= base_url('/assets/libs/bootstrap/css/bootstrap.min.css'); ?>">
    <style>
        .error-page {
            min-height: 100vh;
            background: linear-gradient(45deg, #0d6efd 0%, #0dcaf0 100%);
        }

        .error-container {
            max-width: 600px;
        }

        .error-code {
            font-size: 12rem;
            font-weight: 900;
            background: linear-gradient(to right, #fff, rgba(255, 255, 255, 0.5));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: pulse 2s infinite;
        }

        .error-message {
            color: rgba(255, 255, 255, 0.9);
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        .btn-glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-glass:hover {
            background: rgba(255, 255, 255, 0.3);
            color: white;
        }

        .promotion-footer {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 100%;
            z-index: 9999;
            padding: 0.5rem;
            text-align: center;
            font-size: 0.875rem;
            color: #fff;
            background-color: #000;
        }

        .promotion-footer a {
            color: #cbd5e0;
            text-decoration: underline;
        }

        .promotion-footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>

<div class="error-page d-flex align-items-center justify-content-center">
    <div class="error-container text-center p-4">
        <h1 class="error-code mb-0">404</h1>
        <h2 class="display-6 error-message mb-3">Page Not Found</h2>
        <p class="lead error-message mb-5">We can't seem to find the page you're looking for.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/" class="btn btn-glass px-4 py-2">Return Home</a>
        </div>
    </div>
</div>

<div class="promotion-footer">
    This component is contributed by Anonymous on bootstrapexamples.com.
    &nbsp;<a href="https://bootstrapexamples.com/@anonymous/error-page-template?utm_source=fullscreen-preview&utm_medium=footer">view component</a>
</div>

</body>
</html>

