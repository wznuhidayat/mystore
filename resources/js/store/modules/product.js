import axios from "axios"
export default {
    state: {
        products: [],
        productInCart: [],
        subtotal: 0
    },
    mutations: {
        setProduct(state, payload) {
            state.productInCart.push(payload)
        },
        setCart (state, data) {
            state.productInCart = data
        }, 
        resetCart (state) {
            state.productInCart = null
        },
        setSubtotal(state, data){
            data.forEach(item => {
                var total = item.product.price * item.qty
                state.subtotal += total
            });
        }
    },
    getters: {
        getCart(state) {
            return state.productInCart
        },
        getSubtotal(state){
            return state.subtotal
        }
        // getPage(state) {
        //     return state.page
        // }
    },
    actions: {
        // loadMore({ commit }, page) {
        //     axios("http://127.0.0.1:8000/api/products?page=" + page)
        //     .then((res) => {
                    
        //             commit('setProduct', res.data.data)
        //             // $.each(res.data.data, (key, value) => {
        //             //     commit('setProduct', value)
        //             // });
        //         })
        // },
        // pageInc({commit}){
        //     return commit('pageIncrement')
        // }
        addToCart({commit }, data){
            return axios
            .post("/api/addtocart", data)
            .then(({data}) => {
                // console.log(data)
              commit('setProduct', data.product)
            })
        },
        testgetCart({commit,rootState}){
            try{
              
                axios.get("api/getcart/"+rootState.auth.user.id).then((response) => {
                    commit('setCart', response.data.listCart)
                })
                
            }catch (error){
                return commit('resetCart');
            }
        },
       
    }
}