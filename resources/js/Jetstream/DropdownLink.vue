<template>
    <div>
        <button type="submit" class="block w-full px-4 py-2 text-sm  text-gray-700 text-left hover:bg-green-main hover:text-white focus:outline-none focus:bg-gray-100 transition" v-if="as == 'button'">
            <slot></slot>
        </button>
        
        <a :href="href" class="block px-4 py-2 text-sm font-body text-md text-gray-700 hover:bg-green-main focus:outline-none focus:bg-gray-100 transition" v-else-if="as =='a'">
            <slot></slot>
        </a>

        <inertia-link :href="href" class="block px-4 py-2 text-sm font-body text-gray-700 hover:bg-green-main hover:text-white focus:outline-none focus:bg-gray-100 transition" v-else>
            <slot></slot>
        </inertia-link>
    </div>
</template>

<script>
    export default {
        props: ['href', 'as']
    }
</script>
