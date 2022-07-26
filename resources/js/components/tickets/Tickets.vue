<template>

    <div class="">
        <div class="col-12 mb-3">
            <!-- llamamos al componente para Crear   -->
            <router-link to="/criar-tickets" class="btn btn-success">CRIAR NOVO TICKETS <i
                    class=" fas fa-plus-circle"></i></router-link>

        </div>

        <div class="col-12 px-2">

            <div class="table-responsive">
                <table class="table col-12 table-striped table-dark">
                     <!-- <div class="table-responsive"> -->
                        
                        
                     <thead>
                        <tr>
                            <th>ID</th>
                            <th>assunto</th>
                            <th>Descrição</th>
                            <th>Tipo</th>
                            <th>status</th>
                            <th>Acçao</th>
                        </tr>
                    </thead>

                    <tbody>


                        <tr v-for=" ticket in tickets" :key="ticket.id">
                            <td>{{ ticket.id }}</td>
                            <td>{{ ticket.assunto }}</td>
                            <td>{{ ticket.descricao }}</td>
                            <td>{{ ticket.tipo }} </td>
                            <td>{{ ticket.status }}</td>
                            <td>
                                <!-- llamamos al componente para Editar  -->

                                <router-link :to='{ path: "editarticket/{id}", params: { id: ticket.id } }'
                                    class="btn btn-info"><i class="fas fa-edit"> </i></router-link>

                                <button type="button" class="btn btn-transparent" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <a type="button"  class="btn btn-danger"><i
                                            class="fas fa-trash"></i></a>
                                </button>


                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Tens Certeza Que Pretendes Eliminar o ticket</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Cancelar</button>
                                                <button type="button " data-dismiss="modal" @click="eliminartickets(ticket.id)" class="btn btn-success">Confirmar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>

                </table>

            </div>
        </div>
        <!-- <pagination :data="ticket" @pagination-change-page="getResults"></pagination>-->

        <!-- para  Eliminar  modal -->


    </div>


</template>

<script>
import axios from 'axios';

export default {
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

            dd->console.log(this.tickets);
            }).catch(error => {
                console.log(error)
                this.tik = []
            })
        },
        eliminartickets(id) {
             {

                axios.delete(`api/eliminar/${id}`).then(response => {
                    
                    this.id
                     Toast.fire({
                    icon: 'success',
                    title: response.data.message
                });
                
                })
                .catch(error => {
                    console.log(error)
                })
            }
        }
    }
}

</script>