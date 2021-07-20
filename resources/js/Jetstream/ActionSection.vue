<template>
    <div class="md:grid   md:gap-6">
        <jet-section-title>
            <template #title><slot name="title"></slot></template>
            <template #description><slot name="description"></slot></template>
        </jet-section-title>

        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class=" py-5 sm:p-6 bg-white sm:rounded-lg">
                <slot name="content"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    import JetSectionTitle from './SectionTitle'

    export default {
        components: {
            JetSectionTitle,
        }
    }
</script>
