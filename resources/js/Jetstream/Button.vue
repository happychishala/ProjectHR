<template>
    <button :type="type" class="inline-flex items-center px-4 py-2 bg-green-main border border-transparent rounded-md font-body font-semibold text-xs text-white uppercase tracking-widest hover:opacity-40 active:bg-green-main focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
        <slot></slot>
    </button>
</template>

<script>
    export default {
        props: {
            type: {
                type: String,
                default: 'submit',
            },
        }
    }
</script>
