<template>
    <ol class="breadcrumb">
      <li v-for="item in lista">
          <a v-if="item.url" v-bind:href="item.url" v-bind:class="defineClass">{{item.title}}</a>
          <span v-if="!item.url">{{item.title}}</span>
      </li>
    </ol>
</template>
<script>
    export default {
        props: ['list'],
        data: function () {
            return {
                lista: this.list
            }
        },
        computed: {
           defineClass: function(){
               if(this.url) {
                   return 'active';
               }else {
                   return '';
               }
           }
        }
    }
</script>

<style>
    
</style>