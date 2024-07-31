<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Feeds</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .instagram-media {
            background: #000;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        .instagram-media::before {
            content: '';
            display: block;
            padding-top: 56.25%;
            /* 16:9 aspect ratio */
        }

        .instagram-media iframe,
        .instagram-media blockquote {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }

        .instagram-media[data-instgrm-permalink]::after {
            content: "Instagram Post";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            text-align: center;
            padding: 8px 0;
            font-size: 14px;
            transition: background 0.3s;
        }

        .instagram-media:hover[data-instgrm-permalink]::after {
            background: rgba(0, 0, 0, 0.9);
        }
    </style>
</head>

<body>
    <section class="container mx-auto px-4 py-8">
        <div class="mb-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-4">
                <!-- Increased gap-8 for more space between cards -->
                <!-- Instagram Feed Card -->
                <blockquote class="instagram-media w-full" data-instgrm-permalink="https://www.instagram.com/maspjbanyumas" data-instgrm-version="12">
                </blockquote>
                <blockquote class="instagram-media w-full" data-instgrm-permalink="https://www.instagram.com/betterbanyumas" data-instgrm-version="12">
                </blockquote>
            </div>
        </div>
    </section>

    <script async src="//www.instagram.com/embed.js"></script>
</body>

</html>
