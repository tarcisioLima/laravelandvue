<template>
    <div v-bind:class="defineCor">
        <div class="panel-heading">{{titulo}}</div>
        <div class="panel-body">
           <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['titulo', 'cor'],
        computed: {
            defineCor: function(){
                return "panel " + (this.cor || "panel-default");
            }
        }
    }
</script>

<style>
    .laranja {
        border-color: #594F4F;
    }
    .laranja > .panel-heading {
        color: #fff;
        background-color: #594F4F;
        border-color: #594F4F;
    }
</style>