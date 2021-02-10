<template>
    <app-layout>
        <template slot="header">
            Index des templates
        </template>
        <div class="py-3" v-for="(template, index) in this.templateList" v-bind:key="template.id">
            <div class="mx-8 bg-white rouded shadow p-4">
                <div class="flex justify-between items-center">
                    <div class="text-4xl"> N° {{ template.id }}</div>
                    <div class="text-2xl"> Private</div>
                </div>
      
                                <EmailEditor class="container border-2 border-black" ref="emailEditor" v-on:load="editorLoaded(template.template, index)"
                                             style="width: auto ; height: 300px"/>
                <a href="#" class="bg-indigo-500 text-white rounded px-2 mt-3 hover:bg-indigo-700 inline-block"> Voir le
                    template </a>

            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from './../../Layouts/AppLayout';
import DialogModal from "@/Jetstream/DialogModal";
import {EmailEditor} from 'vue-email-editor'

export default {
    name: "Index.vue",

    components: {
        DialogModal,
        AppLayout,
        EmailEditor,
    },

    data() {
        return {
            templateList: this.templates
        }
    },

    props: ['templates'],

    methods: {
        editorLoaded($template, $index) {
          this.$refs.emailEditor[$index].loadDesign($template)
        },
    },

    mounted() {
        // console.log(this.templateList);

    }
}
</script>

<style scoped>

</style>
