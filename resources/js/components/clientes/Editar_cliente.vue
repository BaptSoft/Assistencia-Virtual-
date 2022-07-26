<template>
  <form @submit.prevent="actualizar">
    <div class="container mt-3">
          
      <div class="form-row">
        <div class="form-group col-md-3">
          <label for="inputEmail4">Nome</label>
          <input type="name" class="form-control" v-model="cliente.nome" placeholder="Nome Completo">
        </div>
        <div class="form-group col-md-3">
          <label for="text">Pessoa de Contacto</label>
          <input type="text" class="form-control" v-model="cliente.Pessoa_contcto" placeholder="Ligacao do cliente">
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Morada</label>
          <input type="text" class="form-control" v-model="cliente.morada" placeholder="Bairro Casa 128">
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Telefone</label>
          <input type="phone" class="form-control" v-model="cliente.telefone" placeholder="937036322">
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">NIF</label>
          <input type="text" class="form-control" v-model="cliente.nif" placeholder="05004-2840-0BAP-273">
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Contrato</label>
          <input type="text" class="form-control" v-model="cliente.contrato" placeholder="tipo de Contrato">
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Conta Corrente</label>
          <input type="text" class="form-control" v-model="cliente.conta_corrente" placeholder="1001-37-5673-1">
        </div>
        <div class="form-group col-md-3">
          <label for="inputState">Desconto de Factura</label>
          <select v-model="cliente.desconto_fatura" class="form-control">
            <option selected>selecionar...</option>
            <option>Sim </option>
            <option>Nao</option>
          </select>
        </div>
        <div class="form-group col-md-3">
          <label for="inputAddress">Limite de Credito</label>
          <input type="text" class="form-control" v-model="cliente.limite_credito" placeholder="1001-37-5673-1">
        </div>
        

        <div class="form-group col-md-3">
          <label for="inputState">Gestor do Cliente</label>
          <select v-model="cliente.gestor_cliente" class="form-control">
            <option selected>selecionar...</option>
            <option>Baptista Silveste </option>
            <option>Silveste Artur</option>
            <option>Maura Faz</option>
          </select>
        </div>
        <div class="form-group col-md-2">
          <label for="inputAddress">Tipo de Manuntenção</label>
          <input type="text" class="form-control" v-model="cliente.tipo_manuntencao" placeholder="Manuntecao">
        </div>
        <div class="form-group col-md-2">
          <label for="inputAddress">Custo da Manuntenção</label>
          <input type="text" class="form-control" v-model="cliente.custo_manuntencao" placeholder="Valor a pagar">
        </div>
        
        <div class="form-group col-md-4">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" v-model="cliente.email" placeholder="Email">
        </div>
        <div class="form-group col-md-4">
          <label for="inputPassword4">senha</label>
          <input type="password" class="form-control" v-model="cliente.senha" placeholder="senha">
        </div>
<div class="form-group col-md-2">
          <label for="inputState">Estado</label>
          <select v-model="cliente.estado" class="form-control">
            <option selected>selecionar...</option>
            <option>ACTIVO</option>
            <option>INATIVO</option>
          </select>
        </div>
      </div>

      <button type="submit" class="btn btn-success">SALVAR ALTEREÇÃO</button>
    </div>
  </form>

</template>

<script>
export default {
 
 

  data() {
    return {
      clienteId:"",
      cliente: {
        nome: "",
        Pessoa_contcto: "",
        email: "",
        telefone: "",
        senha: "",
        nif: "",
        tipo: "",
        contrato: "",
        conta_corrente: "",
        desconto_fatura: "",
        limite_credito: "",
        gestor_cliente: "",
        tipo_manuntencao: "",
        estado: "",
        custo_manuntencao: "",



      }
    }
  },
  mounted() {

    this.clienteId=this.$router.history.current.params.id;

    this.listarCliente();


  },
  methods: {
    actualizar() {
      // axios.put(`api/tasks/${task.id}`, {name:this.tasks.name,
      axios.put(`/api/actualizar_cliente`,this.cliente).then(response => {
        Toast.fire({
          icon: 'success',
          title: response.data.message
        });
      }).catch(error => {
        console.log(error)
      })
    },
    listarCliente() {
      axios.get(`/api/listarcliente/${this.clienteId}`).then(response => {
    

        if (response.status==200){
          
           this.cliente=response.data
           
        }
        
      }).catch(error => {
        console.log(error)
      })
      

    }
  }
}
</script>