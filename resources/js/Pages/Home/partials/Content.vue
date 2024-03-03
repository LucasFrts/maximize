<script setup lang="ts">
import axios from 'axios';
import { onMounted, ref, defineComponent } from 'vue';
import Cards from './Cards.vue';
import { PostList } from '../../../../ts/interfaces/PostInterfaces';

const postList = ref<PostList[] | never[]>();

const getPostList = async ()=>{
    const { data:content }  = await axios.get('/api/v1/posts');
    if(content.success){
        postList.value = content.data;
    }
}
onMounted(getPostList);
defineComponent({
    Cards
});

</script>
<template>
    <h1 class="fs-2rem bold pt-5 text-muted pb-2">Blog</h1>
    <div class="separator mb-5"></div>
    <a :href="`/post/${post.id}`" v-for="post in postList" :key="post.id">
        <Cards :post />
    </a>
</template>
<style scoped>
.fs-2rem{
    font-size: 2rem;
}
.bold{
    font-weight: 700;
}
.separator{
    width: 30px;
    background-color: #FBB03F;
    height: 6px;
}
.text-muted{
    color: #666666 !important;
}
a{
    text-decoration: none;
}
</style>