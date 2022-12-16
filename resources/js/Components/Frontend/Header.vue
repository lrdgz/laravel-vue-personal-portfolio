<template>
    <nav class="bg-light-primary border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-dark-primary">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="http://portfolio.test" class="flex items-center">
            <img src="http://portfolio.test/images/lrdgzc.png" class="h-6 mr-3 sm:h-9" alt="Luis Rodriguez Logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Luis Rodriguez</span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false" @click="showMobileMenu = !showMobileMenu">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="w-full md:block md:w-auto" :class="{hidden: showMobileMenu}" id="navbar-default">
        <ul class="
            flex flex-col p-4 mt-4 border border-light-tail-500 dark:border-dark-navy-100 rounded-lg 
            md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0">
            <li>
                <a href="#home" class="block py-2 pr-4 pl-3 text-light-tail-500 rounded dark:text-dark-navy-100 hover:text-light-tail-100 dark:hover:text-white" aria-current="page">Home</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
</template>

<script setup>
    import { ref } from 'vue';
    const showMobileMenu = ref('false');
</script>