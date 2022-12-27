<script lang="ts" setup>
import { Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

let userLoginInput = reactive({
    email: "",
    password: "",
    remember_me: false,
});

const userLoginSubmit = () => {
    Inertia.post("/login", userLoginInput);
};
</script>

<template>
    <div>
        <h1 class="text-5xl text-center p-10">User Login Page</h1>
        <div class="flex flex-col justify-center items-center">
            <form @submit.prevent="userLoginSubmit">
                <div class="py-2">
                    <label class="px-5" for="email">Email</label>
                    <input v-model="userLoginInput.email" class="border-2 border-black" id="email" type="email"
                        name="email" required autofocus />
                </div>
                <div class="py-2">
                    <label class="px-5" for="password">Password</label>
                    <input v-model="userLoginInput.password" class="border-2 border-black" id="password" type="password"
                        name="password" required autocomplete="current-password" />
                </div>
                <div class="py-2">
                    <label class="px-5" for="remember_me">Remember me</label>
                    <input v-model="userLoginInput.remember_me" id="remember_me" type="checkbox" name="remember">
                </div>
                <div class="px-5 py-2">
                    <button class="border-2 border-black" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="flex flex-col justify-center items-center w-full">
            <div class="py-2">
                <Link class="mx-2 border-2 border-black" href='/' as="button">
                User Welcome
                </Link>
                <Link class="mx-2 border-2 border-black" href='/register' as="button">
                User Register
                </Link>
                <Link class="mx-2 border-2 border-black" href='/home' as="button">
                User Dashboard Home
                </Link>
                <a class="mx-2 border-2 border-black" href='/admin/login' as="button">
                    Admin Login
                </a>
            </div>
        </div>
    </div>
</template>
