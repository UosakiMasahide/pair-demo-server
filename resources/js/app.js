import Vue from 'vue'
import Vuex from 'vuex'

import auth from './auth'
import error from './error'
import { HTTP_UNPROCESSABLE_ENTITY } from './axios/constants'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {
        auth,
        error,
    },
})

import httpClient from './axios'

//共通レスポンス処理
httpClient.interceptors.response.use(
    (response) => {
        response.success = true
        return response
    },
    (error) => {
        //厳密には、error.responseが取れない場合の処理が必要です
        error.response.success = false
        if (error.response.status != HTTP_UNPROCESSABLE_ENTITY) {
            store.commit('error/setCode', error.response.status, { root: true })
        }
        return error.response
    }
)

//共通リクエスト処理
httpClient.interceptors.request.use((request) => {
    console.debug(request)
    return request
})

export default store
