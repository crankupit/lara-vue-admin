<script lang="ts" setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <h1 class="text-5xl text-center p-10">Welcome Page</h1>
    <p class="text-2xl text-center p-10">This page is the welcome page of this app.</p>
    <div class="flex flex-col justify-center items-center w-full">
        <div class="py-2">
            <Link class="mx-2 border-2 border-black" href='/login' as="button">
            User Login
            </Link>
            <Link class="mx-2 border-2 border-black" href='/register' as="button">
            User Register
            </Link>
            <Link class="mx-2 border-2 border-black" href='/home' as="button">
            User Dashboard Home
            </Link>
        </div>
        <div class="py-2">
            <a class="mx-2 border-2 border-black" href='/admin/login' as="button">
                Admin Login
            </a>
            <a class="mx-2 border-2 border-black" href='/admin/register' as="button">
                Admin Register
            </a>
            <a class="mx-2 border-2 border-black" href='/admin/home' as="button">
                Admin Dashboard Home
            </a>
        </div>
    </div>
</template>
