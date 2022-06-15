export default {
    state: {
        user: [],
        isLoggedIn: false,
        cart: null
    },
    mutations: {
        setUser (state, data) {
            state.user = data.user
            state.cart = data.cart
            state.isLoggedIn = true
            
        }, 
        resetUser (state) {
            state.user = null
            state.user = null
            state.isLoggedIn = false
            location.reload()
        }
    },
    getters: {
        isLoggedIn(state) {
            return state.isLoggedIn
        },
        user(state) {
            return state.user
        }
    },
    actions: {
        login({commit }, credentials){
            return axios
            .post("/auth/login", credentials)
            .then(({data}) => {
              commit('setUser', data)
            })
        },
        register({commit }, credentials){
            return axios
            .post("/auth/register", credentials)
            .then(({data}) => {
                commit('setUser', data)
            })
        },
        async getUser({commit}){
            try{
                axios.get('auth/user').then((response) => {
                    console.log(response.data)
                    commit('setUser', response.data)
                    commit('setCart', response.data.productCart, { root: true })
                    commit('setSubtotal', response.data.productCart, { root: true })
                })
            }catch (error){
                return commit('resetUser');
            }
        },
        logout({ commit }) {
            axios.post('/auth/logout').then(()=>{
                commit('resetUser')
            })
        }
    }
}