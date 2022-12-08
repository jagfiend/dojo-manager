<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
    isDisabled: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <button
        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray transition ease-in-out duration-150 disabled:cursor-not-allowed"
        :disabled="isDisabled"
        :type="type"
    >
        <slot />
    </button>
</template>
