<template>
    <q-uploader
        flat
        bordered
        auto-upload
        no-thumbnails
        v-bind="formConfig"
        @uploaded="onUpload"
        ref="uploader"
        class="full-width"
    />
</template>

<script setup>
import { LocalStorage } from 'quasar';
import { computed, ref } from 'vue';

const uploader = ref(null)
const emit = defineEmits('upload')

const formConfig = computed(() => {
    const auth = LocalStorage.getItem('auth_data')

    return {
        url: `${import.meta.env.QCLI_API_URL}/upload`,
        fieldName: 'file',
        headers: [{
            name: 'Authorization',
            value: `Bearer ${auth?.token}`,
        }]
    }
})

const onUpload = ({ xhr }) => {
    const data = JSON.parse(xhr.response)
    emit('upload', data)
    uploader.value.removeUploadFiles()
}
</script>

<style>
div.q-uploader__list {
    display:none;
}
</style>