<template>
    <div v-bind:id="name" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <slot></slot>
        </div>
      </div>
    </div>
</template>
<script>
    export default {
        props: ['name']
    }
</script>
<style>
    
</style>