<template>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><a href="#">Library</a></li>
      <li class="active">Data</li>
    </ol>
</template>
<script>
    export default {
        props: ['list'],
        mounted: function() {
            console.log(JSON.parse(this.list));
        }
    }
</script>

<style>
    
</style>