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
                    <div id="bar" class="container p-3 bg-gray-300">
                        <button class="p-2 my-2 bg-red-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2"
                            v-on:click="saveDesign">Save Design
                        </button>
                        <button class="p-2 my-2 bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 ring-red-300 ring-offset-2"
                            v-on:click="exportHtml">Export HTML
                        </button>
                    </div>

                    <EmailEditor class="container border-2 border-black" ref="emailEditor" v-on:load="editorLoaded" style="width: auto ; height: 800px"/>
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
        editorLoaded() {
            this.$refs.emailEditor.editor.loadDesign(sample);
        },
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
                    console.log('exportHtml', data);
                }
            )
        }
    }
}
</script>
