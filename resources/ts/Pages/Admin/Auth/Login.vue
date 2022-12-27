<script lang="ts" setup>
import { Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

let adminLoginInput = reactive({
    email: "",
    password: "",
    remember_me: false,
});

const adminLoginSubmit = () => {
    Inertia.post("/admin/login", adminLoginInput);
};
</script>

<template>
    <div>
        <h1 class="text-5xl text-center p-10">Admin Login Page</h1>
        <div class="flex flex-col justify-center items-center">
            <form @submit.prevent="adminLoginSubmit">
                <div class="py-2">
                    <label class="px-5" for="email">Email</label>
                    <input v-model="adminLoginInput.email" class="border-2 border-black" id="email" type="email"
                        name="email" required autofocus />
                </div>
                <div class="py-2">
                    <label class="px-5" for="password">Password</label>
                    <input v-model="adminLoginInput.password" class="border-2 border-black" id="password"
                        type="password" name="password" required autocomplete="current-password" />
                </div>
                <div class="py-2">
                    <label class="px-5" for="remember_me">Remember me</label>
                    <input v-model="adminLoginInput.remember_me" id="remember_me" type="checkbox" name="remember">
                </div>
                <div class="px-5 py-2">
                    <button class="border-2 border-black" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="flex flex-col justify-center items-center w-full">
            <div class="py-2">
                <a class="mx-2 border-2 border-black" href='/' as="button">
                    User Welcome
                </a>
                <Link class="mx-2 border-2 border-black" href='/admin/register' as="button">
                Admin Register
                </Link>
                <Link class="mx-2 border-2 border-black" href='/admin/home' as="button">
                Admin Dashboard Home
                </Link>
            </div>
        </div>
    </div>
</template>
