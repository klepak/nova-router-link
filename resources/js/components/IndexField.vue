<template>
    <router-link tag="a" :to="{name: field.route, params: field.params}" class="no-underline font-bold dim text-primary">
        {{ field.value }}
    </router-link>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
