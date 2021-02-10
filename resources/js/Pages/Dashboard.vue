<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div id="bar" class="container p-3 mb-3">
                        <button
                            class="bg-red-500 text-white rounded px-2 mt-3 hover:bg-red-700 inline-block"
                            v-on:click="saveDesign">Save Design
                        </button>
                        <button
                            class="bg-green-500 text-white rounded px-2 mt-3 hover:bg-green-700 inline-block"
                            v-on:click="exportHtml">Create HTML file
                        </button>
                        <a class="bg-indigo-500 text-white rounded px-2 mt-3 hover:bg-indigo-700 inline-block"
                           href="/template/download">
                            Download html
                        </a>
                    </div>

                    <EmailEditor class="container border-2 border-black" ref="emailEditor" v-on:load="editorLoaded"
                                 style="width: auto ; height: 800px"/>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import {EmailEditor} from 'vue-email-editor'

export default {
    components: {
        AppLayout,
        Welcome,
        EmailEditor,
    },
    methods: {
        saveDesign() {
            this.$refs.emailEditor.editor.saveDesign((design) => {
                axios.post('http://127.0.0.1:8000/template', {
                    user_id: 2,
                    template: design,
                })
                    .then(response => console.log(response))
                    .catch(error => console.log(error));
            })
        },
        exportHtml() {
            this.$refs.emailEditor.editor.exportHtml(
                (data) => {
                    axios.post('http://127.0.0.1:8000/template/create/', {
                        data
                    })
                        .then(response => console.log(response))
                        .catch(error => console.log(error));
                })
        },
        saveHtml() {
            axios.get('http://127.0.0.1:8000/template/download/')
                .then(response => console.log(response))
                .catch(error => console.log(error));
        }
    }
}
</script>
