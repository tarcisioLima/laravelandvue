<template>
<div>
    <div class="form-inline">
        <a v-if="criar" v-bind:href="criar">Criar</a>
        <div class="form-group pull-right">
            <input type="text" class="form-control" v-model="searching" placeholder="Buscar">
        </div>
    </div>
       <table class="table table-striped table-hover">
           <thead>
               <tr>
                   <th style="cursor: pointer" v-on:click="orderColumn(index)" v-for="(titulo, index) in titulos">{{titulo}}</th>
                   <th v-if="detalhe || editar || deletar">Ação</th>
               </tr>
           </thead>
           <tbody>
               <tr v-for="(item,index) in filterList">
                   <td v-for="i in item">{{i}}</td>
                   <td v-if="detalhe || editar || deletar">
                       <form v-bind:id="index" v-if="deletar && token" v-bind:action="deletar" method="post">
                           <input type="hidden" name="_method" value="DELETE">
                           <input type="hidden" name="_token" v-bind:value="token">
                           <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                           <a v-if="editar" v-bind:href="editar">Editar |</a> 
                           <a href="#" v-on:click="executaFormulario(index)">Deletar</a>
                       </form>
                       <span v-if="!token">
                           <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                           <a v-if="editar" v-bind:href="editar">Editar |</a> 
                           <a v-if="deletar" v-bind:href="deletar">Deletar</a> 
                       </span>
                       <span v-if="token && !deletar">
                           <a v-if="detalhe" v-bind:href="detalhe">Detalhe |</a> 
                           <a v-if="editar" v-bind:href="editar">Editar</a> 
                       </span>
                   </td>
               </tr>
           </tbody>
       </table>
</div>
</template>

<script>
    export default {
        props: ['titulos','itens', 'criar', 'editar', 'detalhe', 'deletar', 'token', 'ordem', 'ordemcol'],
        data: function() {
            return {
                searching: '',
                ordemAux: this.ordem || 'asc',
                ordemAuxCol: this.ordemcol || 0
            }
        },
        methods: {
            executaFormulario: function(index) {
                document.getElementById(index).submit();
            },
            orderColumn: function(col) {
                this.ordemAuxCol = col;
                if(this.ordemAux.toLowerCase() == 'asc') {
                    this.ordemAux = 'desc';
                }else {
                    this.ordemAux = 'asc';
                }
            }
        },
        computed: {
            filterList: function() {
                var ordem = this.ordemAux || 'asc';
                var ordemCol = this.ordemAuxCol || 0;
                ordemCol = parseInt(ordemCol);
                
                if(ordem.toLowerCase() == 'asc') {
                    this.itens.sort(function(a, b){
                       if(a[ordemCol] > b[ordemCol]) { return 1; }
                       if(a[ordemCol] < b[ordemCol]) { return -1; }
                       return 0;
                    });
                }else {
                    this.itens.sort(function(a, b){
                       if(a[ordemCol] < b[ordemCol]) { return 1; }
                       if(a[ordemCol] > b[ordemCol]) { return -1; }
                       return 0;
                    });
                }
                
                var self = this;
                return this.itens.filter(function(x) {
                      for(let y = 0; y < x.length; y++){
                        if((x[y] + "").toLowerCase().indexOf(self.searching.toLowerCase()) >= 0){
                          return true;  
                        } 
                      }
                      return false;
                  });
                }
            }
        }
    
</script>

<style>
    
</style>