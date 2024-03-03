
<script setup lang="ts">
import BlogLayout from '@/Layouts/BlogLayout.vue';
import Content from "@/Pages/Home/partials/Content.vue";
import { defineComponent } from 'vue';
defineComponent({
    BlogLayout,
    Content
});
</script>
<template>
    <BlogLayout :title="'Início'" :description="'Blog main page'">
        <Content/>
    </BlogLayout>
</template>
<style scoped>
</style>