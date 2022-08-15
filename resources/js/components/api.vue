<template>
    <div>{{ firstView }}</div>
</template>
<script lang="ts">
import { defineComponent } from 'vue'
export default defineComponent({
    setup() {
        const firstView = 'first view'

        return { firstView }
    },
})
</script>
