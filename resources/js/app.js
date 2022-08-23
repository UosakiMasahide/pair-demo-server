require('./bootstrap')
import { createApp } from 'vue/dist/vue.esm-bundler.js'
import VueCompositionApi from '@vue/composition-api'

Vue.use(VueCompositionApi)
window.createApp = createApp
