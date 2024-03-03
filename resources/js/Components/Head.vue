
<script setup lang="ts">
import { Head } from '@inertiajs/vue3';

interface Props {
    title:string;
    description:string;
}

const { title, description } = defineProps<Props>();
</script>

<template>
    <Head>
      <title>{{ title }}</title>
      <meta name="description" :content="description">
    </Head>
</template>