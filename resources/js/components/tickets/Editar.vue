
<template>

<div>

 <div class="container">
 
<!-- <div class="row"> -->
   <div class="col-12">
    <div class="list-group" id="list-tab" role="tablist">
    <a class="list-group-item list-group-item-action active" id="list-cliente-list" data-toggle="list" href="#list-cliente" role="tab" aria-controls="cliente" aliang="center">DESTALHES DO TICKETS:</a>
    
      <form @submit.prevent="actualizar">
    
        <div class="container mt-4">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="text">Assunto</label>
               <input type="name" class="form-control" v-model="ticket.assunto" placeholder="Assunto">
            </div>

                <div class="form-group col-md-2">
                    <label for="inputState">Sector</label>
                    <select v-model="ticket.sector" class="form-control">
                        <option selected>selecionar...</option>
                        <option>ADMINISTRATIVO</option>
                        <option>TECNICO</option>
                        <option>FINACEIRO</option>
                    </select>
                </div>
            </div>
            <div class="form-group col-md-4">
                <label for="text">descricao</label>
                <textarea class="form-control" id="floatingTextarea2" v-model="ticket.descricao" style="height"
                    placeholder="Descreve o seu Problema"> </textarea>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Prioridade</label>
                <select v-model="ticket.prioridade" class="form-control">
                    <option selected>selecionar...</option>
                    <option>NORMAL </option>
                    <option>MAXIMA</option>
                    <option>SUPER-MAXIMA</option>
                </select>
            </div>
             <div class="form-group col-md-4">
                <label for="inputState">Status</label>
                <select v-model="ticket.status" class="form-control">
                    <option selected>selecionar...</option>
                    <option>PEDENTE</option>
                    <option>EM PROCESSO</option>
                    <option>SOLUCIONADO</option>
                     <option>CANCELADO</option>
                      <option>REDIRECIONADO</option>
                </select>
            </div>
<button type="submit" class="btn btn-primary">Mudar Status</button>


        </div>
    </form>
    
    
</div>
 </div> 
 </div>
 </div>
 
</template>

<script>
export default {
    data() {
        return {
               ticketId:"",
            ticket: {
                assunto: "",
                descricao: "",
                prioridade: "",
                sector:"",
                status: "",

            }
        }
    },

 
 mounted() {
     
    this.ticketId=this.$router.history.current.params.id;

    this.listarTickets();


  },

    methods: {
        actualizar() {
            axios.put('/api/actualizar_tickets', this.ticket).then(response => {

                Toast.fire({
                    icon: 'success',
                    title: response.data.message
                });

            }).catch(error => {
                console.log(error)
            })
},
            listarTickets(){
                 axios.get(`/api/listartickets/${this.ticketId}`).then(response => {
          if (response.status==200){
          
           this.ticket=response.data
           
        }
      
        
      }).catch(error => {
        console.log(error)
      })
}    
}
}

</script>