<template>
    <app-layout title="contacts">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contacts
            </h2>
        </template>

        <h1>Aquí se mostrará el formulario para crear un nuevo contacto</h1>
    </app-layout>
</template>

<script>

import AppLayout from '@/Layouts/AppLayout.vue'
export default {
    
    components: {
        AppLayout,
    },
    
}
</script>

<style>

</style>