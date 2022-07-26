<template>
<div class="container">
 
        <div class="col-3 mb-2">
            <!-- llamamos al componente para Crear   -->
            <router-link to="/adicionar-cliente" class="btn btn-success"> Adicionar Novo Cliente <i
                    class=" fas fa-plus-circle"></i></router-link>
        </div>
 
        <div class="col-12 px-9">
            <div class="table-responsive">
             <table class="table col-12 table-striped table-dark">
           
                <!-- <table class="table table-striped table-bordered table-hover"> -->
                <thead>
                    <tr>
                    <th>codigo</th>
                    <th>Nome</th>
                    <th>Contacto</th>
                    <th>Morada</th>
                    <th>email</th>
                    <th>Telefone</th>
                    <th>NIF</th>
                    <th>Tipo</th>
                    <th>Contrato</th>
                    <th>Conta.C</th>
                    <th> L.Credito</th>
                    <th>Gestor</th>
                    <th>Manuntencao</th>
                    <th>Estado</th>
                    <th>Manuntencao</th>
                    <th> Accao </th>
                      </tr>
                   </thead>
                    <tbody>


                        <tr v-for="cliente in clientes" :key="cliente.id">
                            <td>{{ cliente.id }}</td>
                            <td>{{ cliente.nome }}</td>
                            <td>{{ cliente.Pessoa_contcto }}</td>
                            <td>{{ cliente.morada }} </td>
                            <td>{{ cliente.email }}</td>
                            <td>{{ cliente.telefone }}</td>
                            <td>{{ cliente.nif }}</td>
                            <td>{{ cliente.tipo }}</td>
                            <td>{{ cliente.contrato }}</td>
                            <td>{{ cliente.conta_corrente }}</td>
                            <td>{{ cliente.tipo_manuntencao }}</td>
                            <td>{{ cliente.limite_credito }}</td>
                            <td>{{ cliente.gestor_cliente }}</td>
                            <td>{{ cliente.estado }}</td>
                            <td>{{ cliente.custo_manuntencao }}</td>
                            <td>

                                <!-- llamamos al componente para Editar  -->

                                <router-link :to="{ name: 'edit', params: { id: cliente.id } }" class="btn btn-info"><i
                                        class="fas fa-edit"></i></router-link>

                                <button type="button" class="btn btn-transparent" data-toggle="modal"
                                    data-target="#exampleModal">
                                    <a type="button" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title" id="exampleModalLabel">Tens Certeza Que
                                                    Pretendes Eliminar o Cliente</h1>
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
                                                <button type="button " data-dismiss="modal"
                                                    @click="eliminarclientes(cliente.id)"
                                                    class="btn btn-success">Confirmar</button>
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
    
    </div>
    <!-- <pagination :data="ticket" @pagination-change-page="getResults"></pagination> -->



</template>

<script>
import axios from 'axios';

export default {
    name: "mostrar-clientes",
    data() {
        return {
            clientes: [],

        }
    },
    mounted() {
        this.listarcliente();
    },
    methods: {
        listarcliente() {
            axios.get('api/mostrar-clientes').then(response => {
                this.clientes = response.data;
                console.log(this.clientes);
            }).catch(error => {
                console.log(error)
                this.msg = []
            })
        },

        eliminarclientes(id) {
            {

                axios.delete(`api/eliminarcliente/${id}`).then(response => {
                    this.id
                    Toast.fire({
                        icon: 'success',
                        title: response.data.message
                    });
                }).catch(error => {
                    console.log(error)
                })


            }
        }

    }
}

</script>