<script setup lang="ts">
import Head from '@/Components/Head.vue';
import { watch } from 'vue';
import { defineComponent, ref, computed } from 'vue';
interface Ref<T> {
  value: T
}
defineComponent({
    Head
});
const emit                   = defineEmits(['event-header-updated']);
const { title, description } = defineProps<Props>();

const header = ref<HTMLElement | null>(null);
const marginTop = computed(()=>{
    if(header.value){
        return {marginTop: `${(header.value?.clientHeight + 32) ?? 0}px`};
    }
    return {};
})
watch(marginTop, (newValue)=>{
    emit('event-header-updated', newValue);
});

interface Props {
    title:string;
    description:string;
}
</script>
<template>
    <Head :title="title" :description="description"/>
    <header class="w-100 absolute top">
        <div class="d-flex justify-content-center bg-simetra py-3 w-100" ref="header">
            <a href="/">
                <img src="/images/icons/simetra_icon.svg"/>
            </a>
        </div>
    </header>
</template>
<style scoped>
.bg-simetra{
    background-color: #0DADAE;
}
.absolute{
    position: absolute;
}
.top{
    top:0;
}
</style>