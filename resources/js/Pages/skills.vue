<template>
    <app-layout title="Manage Skills" :active="active">
        <div class="">
        </div>
    </app-layout>
</template>

<script>
    import { defineComponent } from 'vue'
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default defineComponent({
        components: {
            AppLayout,
        },
        data() {
            return {
                active:'skills'
            }
        },
    })
</script>
