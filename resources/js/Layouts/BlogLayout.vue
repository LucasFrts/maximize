<script setup lang="ts">
import { ref } from "vue";
import Header from "@/Components/Header.vue";
import Footer from "@/Components/Footer.vue";
import { defineComponent } from "vue";
const { title, description } = defineProps<Props>();
interface Props {
    title:string;
    description:string;
}
const mainStyle = ref({});

const receiveEmit = (event:any) => {
    mainStyle.value = event;
}
defineComponent({Header, Footer});
</script>
<template>
    <Header :title="title" :description="description" @event-header-updated="receiveEmit" />
    <main :style="mainStyle" class="pb-3 container px-4">
        <slot></slot>
    </main>
    <Footer/>
</template>