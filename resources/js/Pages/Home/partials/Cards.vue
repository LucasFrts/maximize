<script setup lang="ts">
const { post } = defineProps<Props>();
const { imagem, descricao, titulo } = post;

interface PostHeader {
    imagem:string;
    descricao:string;
    titulo:string;
}
interface Props {
    post:PostHeader;
}

</script>
<template>
    <div class="px-2 card-post mb-5">
        <div class="row">
            <div class="col-5 pl-0">
                <img :src="imagem" alt="thumb" class="img-fluid">
            </div>
            <div class="col-7 pr-0 pl-2 relative">
                <p class="fs-titulo text-info bold pt-2 mb-1">
                    {{ titulo }}
                </p>
                <p class="fs-descricao mb-2">
                    {{ descricao }}
                </p>
                <div class="w-100">
                    <p class="fs-leia-mais text-info bold text-end pr-4 mb-0">
                        LER MAIS
                    </p>
                </div>
                <span class="orange-detail"></span>
            </div>
        </div>
    </div>
</template>
<style scoped>
.text-info{
    color:#0DADAE !important;
}
.fs-1rem{
    font-size: 1rem;
}
.bold{
    font-weight: 700;
}
.fs-titulo{
    font-size: 0.8125rem;
}
.fs-descricao{
    font-size:0.75rem;
    color:#666666;
}
.fs-leia-mais{
    font-size: 0.625rem;
}
.pr-4{
    padding-right: 1.5rem;
}
.pl-0{
    padding-left: 0 !important;
}
.pr-0{
    padding-left: 0 !important;
}
.card-post{
    box-shadow: 5px 5px 6px #d9d9d990, -5px -5px 6px #e7e7e790;
    border-radius: 15px;
    position: relative;
}
.img-fluid{
    border-top-left-radius: 15px;
    border-bottom-left-radius: 15px;
} 
.pl-2{
    padding-left: 0.5rem !important;
}
.orange-detail{
    position: absolute;
    height: 3px;
    width: 30px;
    background-color: #FBB03F;
    left: -7vw;
    bottom: 15px;
}
.relative{
    position: relative;
}
.col-7{
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}
@media screen and (min-width:768px) {
    .fs-titulo {
        font-size: 1rem;
    }
    .fs-descricao[data-v-947f810f] {
        font-size: 0.9rem;
        color: #666666;
    }
    .fs-leia-mais{
        font-size: 0.75rem;
    }
}
</style>