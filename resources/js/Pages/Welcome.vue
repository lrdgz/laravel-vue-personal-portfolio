<script setup>
    import Hero from '@/Components/Frontend/Hero.vue';
    import Promote from '@/Components/Frontend/Promote.vue';
    import About from '@/Components/Frontend/About.vue';
    import FrontendLayout from '@/Layouts/FrontendLayout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    defineProps({
        canLogin: Boolean,
        canRegister: Boolean,
    });
</script>

<template>
    <Head title="Welcome to portfolio" />
    <FrontendLayout>
        <!-- Hero Primary -->
        <Hero />
        <!-- Promote tail-100 -->
        <Promote />
        <!-- About secondary -->
        <About />
        <!-- Skills rail-100 -->
        <!-- Portfolio primary -->
        <!-- Services secondary-->
        <!-- Contact primary-->
    </FrontendLayout>
</template>
