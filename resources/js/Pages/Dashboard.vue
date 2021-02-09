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
                    <div id="bar">
                        <button
                            class="bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-opacity-50"
                            v-on:click="saveDesign">Save Design
                        </button>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-opacity-50"
                            v-on:click="exportHtml">Export HTML
                        </button>
                    </div>

                    <EmailEditor ref="emailEditor" v-on:load="editorLoaded" style="width: auto ; height: 800px"/>

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
