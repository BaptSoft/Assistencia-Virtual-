<template>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>Criar Novo tickets</h4></div>
                <div class="card-body">
                    <form @submit.prevent="crear">
                        <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Assunto</label>
                                    <input type="text" class="form-control" v-model="tickets.assunto">
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-floating">
                                    <textarea class="form-control" id="floatingTextarea2" v-model="tickets.descricao" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Descrição</label>
                                </div>
                            </div>
                             <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <input type="text" class="form-control" v-model="tickets.tipo">
                                </div>
                            </div>
                            <div class="col-12">
                                 <div class="row">
                            <div class="col-12 mb-2">
                                <div class="form-group">
                                    <label>status</label>
                                    <input type="text" class="form-control" v-model="tickets.status">
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary">Abrir Novo tickets</button>
                            </div>
                        </div>                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"crear-tickets",
    data(){
        return {
            blog:{
                assunto:"",
                descricao:"",
                 tipo:"",
                status:""
            }
        }
    },
    methods:{
        async crear(){
            await this.axios.post('/api/store',this.tickets).then(response=>{
                this.$router.push({name:"mostrartickets"})
            }).catch(error=>{
                console.log(error)
            })
        }
    }
}
</script>