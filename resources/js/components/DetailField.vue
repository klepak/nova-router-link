<template>
    <panel-item :field="field">
        <template slot="value">
            <router-link tag="a" :to="{name: field.route, params: field.params, query: field.query}" class="no-underline font-bold dim text-primary">
                {{ field.value }}
            </router-link>
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
