<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-20">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestream</title>
    <link rel="stylesheet" href="./assets/fonts/font.css">
    <link href="../dist/output.css" rel="stylesheet">
    <script src="./assets/lib/jquery.min.js"></script>
</head>

<body class="bg-[#171616] text-base font-normal">
    <header class="sticky top-0 bg-gradient-to-b from-[#171616] to-[#303030] z-10">
        <div class="relative flex w-full h-[60px] z-10">
            <div
                class="relative md:w-[33%] w-2/3 h-[100px] rounded-br-full bg-gradient-to-b from-[#171616] to-[#414141] z-10">
                <a href="" class="absolute right-[25px] top-1/2 -translate-y-1/2">
                    <img src="./assets/images/logo.png" alt="OKwinTV" loading="lazy">
                </a>
            </div>
            <div class="flex items-center xl:text-lg text-sm font-bold text-[#FC6B31] max-md:hidden">
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Xoilac
                    TV</a>
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Lịch
                    thi đấu</a>
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Bảng
                    xếp hạng</a>
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Kết
                    quả</a>
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Dự
                    đoán</a>
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Nhận
                    định</a>
                <a href="/"
                    class="relative px-5 py-[18px] after:absolute after:left-0 after:bottom-[10%] after:w-full after:h-[2px] after:bg-[#FC6B31] [&:not(.active,:hover)]:after:bg-transparent after:duration-150">Tin
                    tức</a>
            </div>

            <!-- Mobile menu -->
            <div class="menu-btn absolute top-[15px] right-5 cursor-pointer z-10 md:hidden">
                <img src="./assets/images/menu.svg" alt="menubtn" loading="lazy">
            </div>
            <div class="close-btn absolute top-[15px] right-5 cursor-pointer z-10 md:hidden hidden">
                <img src="./assets/images/closemenu.svg" alt="menubtn" loading="lazy">
            </div>
            <div class="md:hidden">
                <div
                    class="menu fixed top-0 left-0 w-full bg-[#242323] flex flex-col xl:text-lg text-sm font-bold text-[#FC6B31] pt-[100px] px-[10px] pb-[5px] z-[9] rounded-b-[10px] transition-transform duration-300 ease-in-out -translate-y-full">
                    <a href="/"
                        class="w-full py-[10px] border-b-[0.5px] border-[#F15E23] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Xoilac
                        TV</a>
                    <a href="/"
                        class="w-full py-[10px] border-b-[0.5px] border-[#F15E23] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Lịch
                        thi đấu</a>
                    <a href="/"
                        class="w-full py-[10px] border-b-[0.5px] border-[#F15E23] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Bảng
                        xếp hạng</a>
                    <a href="/"
                        class="w-full py-[10px] border-b-[0.5px] border-[#F15E23] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Kết
                        quả</a>
                    <a href="/"
                        class="w-full py-[10px] border-b-[0.5px] border-[#F15E23] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Dự
                        đoán</a>
                    <a href="/"
                        class="w-full py-[10px] border-b-[0.5px] border-[#F15E23] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Nhận
                        định</a>
                    <a href="/"
                        class="w-full py-[10px] pl-[5px] before:content-['•'] before:mr-2 before:text-[#F15E23]">Tin
                        tức</a>
                </div>
            </div>
        </div>
    </header>