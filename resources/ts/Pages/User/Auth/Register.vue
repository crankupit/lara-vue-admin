<script lang="ts" setup>
import { Link } from "@inertiajs/inertia-vue3";
import { reactive } from "vue";
import { Inertia } from "@inertiajs/inertia";

let userRegisterInput = reactive({
    name: "",
    email: "",
    password: "",
});

const userRegisterSubmit = () => {
    Inertia.post("/register", userRegisterInput);
};
</script>

<template>
    <div>
        <h1 class="text-5xl text-center p-10">User Register Page</h1>
        <div class="flex flex-col justify-center items-center">
            <form @submit.prevent="userRegisterSubmit">
                <div class="py-2">
                    <label class="px-5" for="name">Name</label>
                    <input v-model="userRegisterInput.name" class="border-2 border-black" id="name" type="text"
                        name="name" required autofocus />
                </div>
                <div class="py-2">
                    <label class="px-5" for="email">Email</label>
                    <input v-model="userRegisterInput.email" class="border-2 border-black" id="email" type="email"
                        name="email" required autofocus />
                </div>
                <div class="py-2">
                    <label class="px-5" for="password">Password</label>
                    <input v-model="userRegisterInput.password" class="border-2 border-black" id="password"
                        type="password" name="password" required autocomplete="current-password" />
                </div>
                <div class="py-2">
                    <label class="px-5" for="password_confirmation">Confirm Password</label>
                    <input class="border-2 border-black" id="password_confirmation" type="password"
                        name="password_confirmation" required autocomplete="current-password" />
                </div>
                <div class="px-5 py-2">
                    <button class="border-2 border-black" type="submit">Register</button>
                </div>
            </form>
        </div>
        <div class="flex flex-col justify-center items-center w-full">
            <div class="py-2">
                <Link class="mx-2 border-2 border-black" href='/' as="button">
                User Welcome
                </Link>
                <Link class="mx-2 border-2 border-black" href='/login' as="button">
                User Login
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

