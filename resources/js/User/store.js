export default {
    namespaced: true,
    state: {
        user: {},
        token: null,
        authenticated: false
    },
    mutations: {
        SET_USER(state, user) {
            state.user = user;
        }
    },
    actions: {
        setUser({ commit }, user) {
            commit('SET_USER', user);
        }
    },
}