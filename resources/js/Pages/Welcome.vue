<script setup>
    import Hero from '@/Components/Frontend/Hero.vue';
    import Promote from '@/Components/Frontend/Promote.vue';
    import About from '@/Components/Frontend/About.vue';
    import Skills from '@/Components/Frontend/Skills.vue';
    import Portfolio from '@/Components/Frontend/Portfolio.vue';
    import FrontendLayout from '@/Layouts/FrontendLayout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';

    defineProps({
        canLogin: Boolean,
        canRegister: Boolean,
        skills: Object,
        projects: Object,
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
        <Skills :skills="skills" />
        <!-- Portfolio primary -->
        <Portfolio :skills="skills" :projects="projects"/>
        <!-- Services secondary-->
        <!-- Contact primary-->
    </FrontendLayout>
</template>
