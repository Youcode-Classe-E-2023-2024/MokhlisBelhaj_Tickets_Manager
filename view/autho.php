<?php require_once 'include/header.php'; ?>

<!-- component -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<main class="  min-h-screen w-full bg-white">
    <div class="p-6 " x-data="app">
        <!-- header -->
        <header class="flex  mb-10 w-full justify-center">
            <div>
                <button type="button" @click="isLoginPage = false" x-show="isLoginPage" class="rounded-2xl border-b-2 border-b-gray-300 bg-white px-4 py-3 font-bold text-blue-500 ring-2 ring-gray-300 hover:bg-gray-200 active:translate-y-[0.125rem] active:border-b-gray-200">LOGIN</button>

                <button type="button" @click="isLoginPage = true" x-show="!isLoginPage" class="rounded-2xl border-b-2 border-b-gray-300 bg-white px-4 py-3 font-bold text-blue-500 ring-2 ring-gray-300 hover:bg-gray-200 active:translate-y-[0.125rem] active:border-b-gray-200">SIGN UP</button>
            </div>
        </header>
 
        <div class=" w-1/3  mx-auto self-center  text-center">
            <!-- register content -->
            <form action="<?php echo URLROOT;?>user/autho" method="post">
                <div x-show="isLoginPage" class="space-y-4">
                    <header class="mb-3 text-2xl font-bold">Create your profile</header>

                    <div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
                        <input type="text" name="name" placeholder="Name" class="my-3 w-full border-none bg-transparent outline-none focus:outline-none" />
                    </div>
                    <div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
                        <input type="email" name="email" placeholder="Email" class="my-3 w-full border-none bg-transparent outline-none focus:outline-none" />
                    </div>
                    <div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
                        <input type="password" name="password" placeholder="Password" class="my-3 w-full border-none bg-transparent outline-none focus:outline-none" />
                    </div>
                    <div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
                        <input type="password" name="confirm_password" placeholder="confirm password" class="my-3 w-full border-none bg-transparent outline-none focus:outline-none" />
                    </div>
                    <button  type="submit" name="register" class="w-full rounded-2xl border-b-4 border-b-blue-600 bg-blue-500 py-3 font-bold text-white hover:bg-blue-400 active:translate-y-[0.125rem] active:border-b-blue-400">CREATE ACCOUNT</button>
                </div>
            </form>

            <!-- login content -->
            <form action="<?php echo URLROOT;?>user/autho" method="post">
                <div x-show="!isLoginPage" class="space-y-4">
                    <header class="mb-3 text-2xl font-bold">Log in</header>
                    <div class="w-full rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
                        <input type="text" name="login_email" placeholder="Email or username" class="my-3 w-full border-none bg-transparent outline-none focus:outline-none" />
                    </div>
                    <div class="flex w-full items-center space-x-2 rounded-2xl bg-gray-50 px-4 ring-2 ring-gray-200 focus-within:ring-blue-400">
                        <input type="password" name="login_password" placeholder="Password" class="my-3 w-full border-none bg-transparent outline-none" />
                    </div>
                    <button type="submit" name="login" class="w-full rounded-2xl border-b-4 border-b-blue-600 bg-blue-500 py-3 font-bold text-white hover:bg-blue-400 active:translate-y-[0.125rem] active:border-b-blue-400">LOG IN</button>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
    <?php $test = $data['login']; ?>
    document.addEventListener("alpine:init", () => {
        Alpine.data("app", () => ({
            isLoginPage: <?php echo $test; ?>,
        }));
    });
</script>