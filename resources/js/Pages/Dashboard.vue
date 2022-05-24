<template>
    <app-layout title="Dashboard" :active="active">
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
                active:'Dashboard'
            }
        },
    })
</script>
