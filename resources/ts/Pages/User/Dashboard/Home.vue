<script lang="ts" setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <h1 class="text-5xl text-center p-10">User Dashboard</h1>
    <p class="text-2xl text-center p-10">This page is only visible to logged in users.</p>
    <div class="flex flex-col justify-center items-center w-full">
        <div class="py-2">
            <Link class="mx-2 border-2 border-black" href='/' as="button">
            User Welcome
            </Link>
            <Link class="mx-2 border-2 border-black" href='/login' as="button">
            User Login
            </Link>
            <Link class="mx-2 border-2 border-black" href='/register' as="button">
            User Register
            </Link>
            <a class="mx-2 border-2 border-black" href='/admin/login' as="button">
                Admin Login
            </a>
            <Link class="mx-2 border-2 border-black" href='/logout' method="POST" as="button">
            User Logout
            </Link>
        </div>
    </div>
</template>
