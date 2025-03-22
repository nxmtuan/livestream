<!DOCTYPE html>
<html lang="en" class="scroll-smooth scroll-pt-20">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestream - Login</title>
    <link rel="stylesheet" href="./assets/fonts/font.css">
    <link href="../dist/output.css" rel="stylesheet">
    <script src="./assets/lib/jquery.min.js"></script>
</head>

<body class="bg-[#171616] text-base font-normal">
    <main class="h-screen container flex items-center">
        <div class="relative flex md:w-[840px] w-full h-[600px] rounded-[10px] overflow-hidden">
            <img src="./assets/images/closebtn.svg" alt="" loading="lazy"
                class="absolute top-[10px] right-[10px] size-5">
            <div class="w-1/2 h-full max-md:hidden">
                <img src="./assets/images/login.png" alt="" loading="lazy" class="size-full object-cover">
            </div>
            <div class="md:w-1/2 w-full h-full flex flex-col justify-center items-center bg-angularGradient">
                <div class="w-[300px] flex flex-col gap-[10px] justify-center items-center">
                    <img src="./assets/images/logo-login.png" alt="" loading="lazy"
                        class="aspect-[215/38] object-cover">
                    <div class="flex w-full rounded-[10px] overflow-hidden border border-[#F15E23]">
                        <a href="login.php"
                            class="w-1/2 py-[3px] text-lg text-white text-center bg-transparent capitalize">Đăng
                            Nhập</a>
                        <a href="#" class="w-1/2 py-[3px] text-lg text-white text-center bg-[#F15E23] capitalize">Đăng
                            Ký</a>
                    </div>
                    <div class="relative w-full">
                        <img src="./assets/images/username.svg" alt="" loading="lazy"
                            class="absolute top-1/2 -translate-y-1/2 left-[10px] w-[17px] h-5">
                        <input type="text" placeholder="Nhập Tên Tài Khoản Của Bạn" required
                            class="size-full border border-[#A5A5A5] rounded-[10px] p-[10px] pl-8 bg-[#666666]">
                    </div>
                    <div class="relative w-full">
                        <img src="./assets/images/pass.svg" alt="" loading="lazy"
                            class="absolute top-1/2 -translate-y-1/2 left-[10px] w-[17px] h-5">
                        <input type="password" placeholder="Nhập Mật Khẩu Của Bạn" required
                            class="size-full border border-[#A5A5A5] rounded-[10px] py-[10px] px-8 bg-[#666666]">
                        <div class="absolute top-1/2 -translate-y-1/2 right-[10px] cursor-pointer">
                            <img src="./assets/images/hide-pass.svg" alt="" loading="lazy" class="w-[17px] h-5">
                        </div>
                    </div>
                    <div class="relative w-full">
                        <img src="./assets/images/pass.svg" alt="" loading="lazy"
                            class="absolute top-1/2 -translate-y-1/2 left-[10px] w-[17px] h-5">
                        <input type="password" placeholder="Xác Nhận Mật Khẩu" required
                            class="size-full border border-[#A5A5A5] rounded-[10px] py-[10px] px-8 bg-[#666666]">
                        <div class="absolute top-1/2 -translate-y-1/2 right-[10px] cursor-pointer">
                            <img src="./assets/images/hide-pass.svg" alt="" loading="lazy" class="w-[17px] h-5">
                        </div>
                    </div>
                    <div class="w-full flex items-center">
                        <input type="text" placeholder="Mã CAPTCHA"
                            class="size-full border border-[#A5A5A5] rounded-l-[10px] p-[10px] bg-[#666666]" />

                        <button class="bg-[#b6b6b6] h-full px-2">
                            <img src="./assets/images/return.svg" alt="" loading="lazy" class="w-[50px] h-5">
                        </button>

                        <div class="size-full border border-[#A5A5A5] rounded-r-[10px] p-[10px] bg-[#666666]">
                            <span id="captcha">ABC123</span>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center text-[#b6b6b6] text-sm">
                        <div class="flex items-center gap-[3px]">
                            <input type="checkbox" name="" id="">
                            <span class="capitalize">Ghi Nhớ</span>
                        </div>
                        <a href="" class="capitalize font-semibold">Quên Mật Khẩu?</a>
                    </div>
                    <button type="submit"
                        class="w-full py-[10px] text-center rounded-[10px] overflow-hidden bg-btnGradient text-white font-semibold">Đăng
                        Nhập</button>
                    <div class="text-sm text-white">
                        Đã có tài khoản vui lòng
                        <a href="login.php" class="text-[#F15E23]">[Đăng nhập]</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="./assets/lib/script.js"></script>
</body>

</html>