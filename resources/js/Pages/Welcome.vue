<template>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <inertia-link v-if="$page.props.user" href="/dashboard" class="text-sm text-gray-700 underline">
                Dashboard
            </inertia-link>

            <template v-else>
                <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
                    Login
                </inertia-link>

                <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </inertia-link>
            </template>
        </div>

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center">
                <div class="col-md-4 mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-labelledby="title"
                         aria-describedby="desc" role="img" xmlns:xlink="http://www.w3.org/1999/xlink"
                         width="64" height="64">
                        <circle data-name="layer2"
                                cx="32" cy="32" r="10" fill="none" stroke="#202020" stroke-linecap="round"
                                stroke-miterlimit="10" stroke-width="2" stroke-linejoin="round"></circle>
                        <path data-name="layer1"
                              d="M61 27h-6.551a22.857 22.857 0 0 0-3.041-7.336l4.634-4.634a1 1 0 0 0 0-1.414l-5.657-5.658a1 1 0 0 0-1.414 0l-4.634 4.634A22.857 22.857 0 0 0 37 9.552V3a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v6.552a22.857 22.857 0 0 0-7.336 3.041l-4.635-4.635a1 1 0 0 0-1.414 0l-5.657 5.657a1 1 0 0 0 0 1.414l4.634 4.634A22.857 22.857 0 0 0 9.552 27H3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h6.552a22.856 22.856 0 0 0 3.041 7.336l-4.635 4.635a1 1 0 0 0 0 1.414l5.657 5.657a1 1 0 0 0 1.414 0l4.634-4.634A22.86 22.86 0 0 0 27 54.449V61a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-6.551a22.86 22.86 0 0 0 7.336-3.041l4.634 4.634a1 1 0 0 0 1.414 0l5.657-5.657a1 1 0 0 0 0-1.414l-4.634-4.634A22.856 22.856 0 0 0 54.449 37H61a1 1 0 0 0 1-1v-8a1 1 0 0 0-1-1z"
                              fill="none" stroke="#202020" stroke-linecap="round" stroke-miterlimit="10"
                              stroke-width="2" stroke-linejoin="round"></path>
                    </svg>
                </div>
                <div class="text-4xl"> FactorE </div>

            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs"
                                                                                 class="underline text-gray-900 dark:text-white">Documentation</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Ciarge de boswell de maudit de bout d'crisse de viande à chien de sacristi de cochonnerie de purée de cibouleau de sapristi de gériboire de mautadine de tabarslaque de calvince de verrat d'étole de calvinouche de torrieux de cimonaque de calvaire de saint-cimonaque.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                                <path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com"
                                                                                 class="underline text-gray-900 dark:text-white">FactorEcasts</a>
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Câline de cul de viande à chien de bout d'ciarge de charogne de colon de bout d'crisse de sapristi de crucifix d'étole de calvaire de Jésus de plâtre de marde de boswell de mosus de charrue de ciboire de batèche de cibouleau de cochonnerie de calvinouche.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/"
                                                                                 class="underline text-gray-900 dark:text-white">FactorE
                                News</a></div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Ostie de charogne de crucifix de sainte-viarge de mosus de ciboire de tabarnak de géritole de saint-sacrament de cibolac de câlique de torvisse de colon de viande à chien de câline de Jésus Marie Joseph de bout d'viarge de tabarnouche de boswell de charrue de sacristi.
                            </div>
                        </div>
                    </div>

                    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                 stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500">
                                <path
                                    d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant
                                Ecosystem
                            </div>
                        </div>

                        <div class="ml-12">
                            <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                Bout d'ciarge de cibolac de purée de viande à chien de crucifix de Jésus de plâtre de sacristi de torvisse de saint-ciarge de cibole d'étole de boswell de sapristi de crisse de torrieux de maudite marde de ciarge de cossin de calvinouche de charogne de viarge.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                             viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>

                        <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                            Shop
                        </a>

                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                            <path
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>

                        <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                            Sponsor
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>

<script>
export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    }
}
</script>
