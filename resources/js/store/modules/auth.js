export default {
    state: {
        user: [],
        isLoggedIn: false,
    },
    mutations: {
        setUser (state, data) {
            state.user = data
            state.isLoggedIn = true
        }, 
        resetUser (state) {
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
                    commit('setUser', response.data)
                })
            }catch (error){
                return error;
            }
        },
        logout({ commit }) {
            axios.post('/auth/logout').then(()=>{
                commit('resetUser')
            })
        }
    }
}