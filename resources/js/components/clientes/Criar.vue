<template>
   <form @submit.prevent="crear">
    <div  class="container mt-3">
        <div class="form-row">
       <div class="form-group col-md-3">
      <label for="text">Nome</label>
      <input type="text" class="form-control" v-model="cliente.nome" placeholder="Ligacao do cliente"> 
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
    <label for="inputAddress">tipo</label>
    <input type="text" class="form-control" v-model="cliente.tipo" placeholder="1001-37-5673-1">
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
  <!-- <div class="form-group col-md-1">
    <label for="inputAddress">estado</label>
    <input type="text" class="form-control" v-model="cliente.estado" placeholder="1001-37-5673-1">
  </div> -->
    <div class="form-group col-md-4">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" v-model ="cliente.email" placeholder="Email">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">senha</label>
      <input type="password" class="form-control" v-model="cliente.senha" placeholder="senha">
    </div>
   
  </div>
  
   <button type="submit" class="btn btn-primary">SALVAR</button>
  </div>
</form>

   
</template>

<script>
export default {
    name:"adicionar-cliente",
   
    data(){
        return {
            cliente:{
                nome:"",
              Pessoa_contcto:"",
                email:"",
                telefone:"",
                senha:"",
                nif:"",
                tipo:"",
                contrato:"",
                conta_corrente:"",
                desconto_fatura:"",
                limite_credito:"",
                gestor_cliente:"",
                tipo_manuntencao:"",
                 estado:"INATIVO",
                custo_manuntencao:"",



            },
           
        }
    },
    methods:{
        crear(){
            axios.post('api/clientes',this.cliente).then(response=>{

                Toast.fire({
                        icon: 'success',
                        title: response.data.message
                  });
                  
            }).catch(()=>{
              // if(error.response.status===422){
              //   this.erros=error.response.data.erros;
            }),
                  Toast.fire({
                      icon: 'error',
                      title: 'PorFavor Verifica os Dados'
                  


                  });
    
    

              
    
        }}
    
}
</script>