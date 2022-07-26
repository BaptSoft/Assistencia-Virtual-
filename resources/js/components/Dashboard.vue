<template>
         
    <section>  
        <p>
       <graficos></graficos>   
  </p>
 <div class="card-body">
                      
                        <div class="table-responsive">
                        
                        <table class="table col-12 table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Assunto</th>
                                     <th>Descricao</th>
                                    <th>Prioridade</th>
                                     <th>Sector</th>
                                    <th>Status</th>
                                   <th>Ver Detalhe</th>
                                  
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <tr v-for=" ticket in tickets" :key="ticket.id">
                            <td>{{ ticket.id }}</td>
                            <td>{{ ticket.assunto }}</td>
                            <td>{{ ticket.descricao }}</td>
                             <td>{{ ticket.prioridade }} </td>
                            <td>{{ ticket.sector}} </td>
                            <!-- <td>{{ ticket.status }}</td> -->
                       <td><span class="badge badge-warning">{{ ticket.status }}</span></td>
                     
                      <td> <router-link :to="{name:'editi',params: { id: ticket.id }}"
                            class="btn btn-info"><i class="far fa-eye"> </i></router-link>
                            <!-- Button trigger modal -->


                                
                        </td>
                        </tr>
                    </tbody>

                </table>

            </div>
            </div>
                                
                    

        
    </section>
   
</template>

<script>
import axios from 'axios';
import Graficos from './Graficos.vue';
import graficosVue from './Graficos.vue';
    export default {
  components: {Graficos},
   Graficos:graficosVue,
    name: "mostrar",
    data() {
        return {
            tickets: [],
        }
    },
    mounted() {
        this.listartickets();
        
    },
        methods: {
        listartickets() {
            axios.get('api/mostrar').then(response => {
                this.tickets = response.data;
                console.log(this.tickets);
            }).catch(error => {
                console.log(error)
                this.tik = []
            })
},
        mounted() {
            console.log('Component mounted.');
            
        }
    }
     }
</script>
