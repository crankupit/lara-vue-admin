<script lang="ts" setup>
import { Link } from "@inertiajs/inertia-vue3";
</script>

<template>
    <h1 class="text-5xl text-center p-10">Admin Dashboard</h1>
    <p class="text-2xl text-center p-10">This page is only visible to logged in admins.</p>
    <div class="flex flex-col justify-center items-center w-full">
        <div class="py-2">
            <a class="mx-2 border-2 border-black" href='/' as="button">
                User Welcome
            </a>
            <Link class="mx-2 border-2 border-black" href='/admin/login' as="button">
            Admin Login
            </Link>
            <Link class="mx-2 border-2 border-black" href='/admin/register' as="button">
            Admin Register
            </Link>
            <Link class="mx-2 border-2 border-black" href='/admin/logout' method="POST" as="button">
            Admin Logout
            </Link>
        </div>
    </div>
</template>
