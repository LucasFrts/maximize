<script setup lang="ts">
import { Post } from '../../../../ts/interfaces/PostInterfaces';

const { post } = defineProps<Props>();
const { titulo, imagem, texto_completo } = post;

const imagem_desktop = imagem.replace('.png', '_desktop.png');

interface Props {
    post:Post;
}

</script>
<template>
    <p class="text-info text-breadcrumb pt-3 pb-4">
        <a href="/">Início</a> > Blog
    </p>
    <h1 class="fs-titulo pb-4">
        {{ titulo }}
    </h1>
    <div class="row pb-4">
        <div class="col-12 d-md-none d-block">
            <img :src="imagem" alt="banner image" class="img-fluid">
        </div>
        <div class="col-12 d-md-block d-none">
            <img :src="imagem_desktop" alt="banner image" class="img-fluid">
        </div>
    </div>
    <section v-html="texto_completo" class="text-muted text-full"></section>
    <hr class="mt-5">
</template>
<style scoped>
a{
    text-decoration: none;
    color:inherit;
}
.text-info{
    color:#0DADAE !important;
}
.text-breadcrumb{
    font-size: 1rem;
}
.fs-titulo{
    font-size: 2rem;
    color:#666666;
    font-weight: 700;
}
.text-muted{
    color: #666666 !important;
}
.text-full{
    font-size: 1.125rem;
} 
hr{
    border-color: #E0E0E0;
    opacity: 1;
}
</style>