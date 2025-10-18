<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio - Danda Miftah</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-[#0f172a] text-gray-300 font-sans">

    <?php
    
    include 'SectionHome.php';
    include 'SectionProfile.php';
    include 'SectionWork.php';
    include 'SectionProjects.php';
    include 'SectionSkill.php';
    include 'SectionContact.php';

    ?>

    <footer class="text-center py-6 text-gray-500 border-t border-gray-700 text-sm sm:text-base">
        © 2025 Danda Miftah. All rights reserved.
    </footer>

    <script src="https://kit.fontawesome.com/a2e0e6a5a7.js" crossorigin="anonymous"></script>
</body>

</html>