<template>
    <div></div>
</template>
<script lang="ts">
import { defineComponent, getCurrentInstance } from '@vue/composition-api'

export default defineComponent({
    name: 'firstview',
    setup() {
        const instance = getCurrentInstance()
        const axios = instance!.proxy.$axios

        const postText = async () => {
            try {
                const res = await axios.post(`/api/3/memos`, 'test request')
                console.log('API success', res.data)
                return true
            } catch (error) {
                alert('作成に失敗しました。')
                console.log('API error', error)
                return false
            }
        }
    },
})
</script>
