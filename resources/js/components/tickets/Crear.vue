<template>

    <form @submit.prevent="crear">
    
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
<button type="submit" class="btn btn-primary">Abrir Novo Tickets</button>
        </div>
    </form>

   

</template>

<script>
export default {
    name: "criar-tickets",
    router: 'Todos-tickets',
    data() {
        return {

            ticket: {
                assunto: "",
                descricao: "",
                tipo: "",
                prioridade:"",
                sector:"",
                status: "PEDENTE",


            }
        }
    },
    methods: {
          
        crear() {
            axios.post('api/tickets', this.ticket).then(response => {

                Toast.fire({
                    icon: 'success',
                    title: response.data.message});
                    })


           .catch(()=>{

                  Toast.fire({
                      icon: 'error',
                      title: 'PorFavor Verifica os Dados'
                  });
              })
          }
            
        
        }
        }
</script>