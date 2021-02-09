<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Templates
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <!-- TODO :: get all templates -->
                    <ul class="list-group">
                        <li class="list-group-item" v-for="template in templates" :key="template.id">
                            <a href="#">{{ template.id }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout';

    export default {
        components: {
            AppLayout
        },
        data() {
            return {
                templates: {}
            }
        },

        created() {
            // axios.get('http://127.0.0.1:8000/template').then((response) => {
            //     this.templates = response.data;
            // }).catch((err) => {
            //     console.log(err)
            // })
            axios.get('http://127.0.0.1:8000/template').then(response => this.templates = response.data)
                .catch((err) => {
                    console.log(err)
                })
        },
        name: "Templates",
        methods: {}
    }
</script>

<style scoped>

</style>
