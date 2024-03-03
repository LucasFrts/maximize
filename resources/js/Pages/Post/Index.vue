
<script setup lang="ts">
import BlogLayout from '@/Layouts/BlogLayout.vue';
import { computed, defineComponent, onMounted, ref } from 'vue';
import axios from 'axios';
import { Post } from '../../../ts/interfaces/PostInterfaces';
import Content from './partials/Content.vue';

const post = ref<Post | null>(null);

const getPost = async (id:string) => {
    const { data:content } = await axios.get(`/api/v1/post/${id}`);
    if(content.success){
        post.value = content.data;
    }

}

defineComponent({
    BlogLayout
});

onMounted(()=>{
    const pathList = window.location.href.split('/');
    const id = pathList.pop();
    if(id){
        getPost(id);
    }
});

const title = computed(()=>{
    return post?.value?.titulo ?? 'Blog title';
});

const description = computed(()=>{
    return post?.value?.descricao ?? 'Blog description';
});


</script>
<template>
    <BlogLayout :title :description>
        <Content v-if="post" :post />
    </BlogLayout>
</template>
<style scoped>
</style>