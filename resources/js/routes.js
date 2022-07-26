
export default [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default },
    { path: '/developer', component: require('./components/Developer.vue').default },
    { path: '/users', component: require('./components/Users.vue').default },
    { path: '/cliente', component: require('./components/clientes/Cliente.vue').default },
    { path: '/product/tag', component: require('./components/product/Tag.vue').default },
    { path: '/product/category', component: require('./components/product/Category.vue').default },
    { path: '*', component: require('./components/NotFound.vue').default },
    { path: '/tickets', component: require('./components/tickets/Tickets.vue').default },
    { path: '/criar-tickets', component: require('./components/tickets/Crear.vue').default },
    { path: '/adicionar-cliente', component: require('./components/clientes/Criar.vue').default},
    { path: '/editar_cliente/:id',name:'edit',component: require('./components/clientes/Editar_cliente.vue').default},
    { path: '/mostrar-tickets', component: require('./components/tickets/Mostrar.vue').default},
   { path: '/editarticket/:id',name:'editi',component: require('./components/tickets/Editar.vue').default},

    
  
    
];
