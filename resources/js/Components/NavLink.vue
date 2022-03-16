<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'text-xs uppercase py-3 font-bold block text-emerald-500 hover:text-emerald-600'
    : 'text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
