<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Hero Section</title>
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@550;700&display=swap" rel="stylesheet">
  <style>
    .hero-text {
        color: #4287A0;
        font-family: 'Montserrat', sans-serif;
        font-weight: 550;
        font-size: 0.8rem; /* 12.8px */
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards 0.5s;
    }

    .hero-h1 {
        color: #4287A0;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        font-size: 1.5rem; /* 24px */
        text-decoration: underline;
        margin-top: 12px;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards 1s;
    }

    @media (min-width: 768px) {
        .hero-text {
            font-size: 1rem; /* 16px */
        }

        .hero-h1 {
            font-size: 2.1rem; /* 33.6px */
        }
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }

    .hero-image {
      opacity: 0;
        transform: translateY(20px);
        animation: fadeIn 1.5s forwards 1s;
    }

  </style>
</head>
<body class="font-montserrat">

<section class="relative">
    <img src="storage/hero.png" alt="City illustration" class="w-full h-64 md:h-auto object-cover md:object-contain">
    <div class="absolute top-0 left-0 w-full h-3/5 flex flex-col items-center justify-center text-center text-white">
        <img src="storage/logo-kabupaten.png" alt="Banyumas Logo" class="hidden md:block w-24 md:w-32 mb-4 hero-image">
        <p class=" mt-4 hero-text">SELAMAT DATANG DI SITUS RESMI</p>
        <h1 class="  font-bold hero-h1">SATUPORTAL BANYUMAS</h1>
    </div>
</section>

</body>
</html>
