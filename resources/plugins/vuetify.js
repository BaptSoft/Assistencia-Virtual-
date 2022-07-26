import Vue from 'vue'
import Vuetify from 'vuetify/lib'
//import 'material-design-icons-iconfont/dist/material-design-icons.css'
//import '@mdi/font/css/materialdesignicons.css'

Vue.use(Vuetify, {
    iconfont: 'mdi'
})

const opts = {}

export default new Vuetify(opts)