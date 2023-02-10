export default {
    namespaced: true,
    state: {
        messages: [],
        isSending: false,
    },
    mutations: {
        SET_MESSAGES(state, messages) {
            state.messages = messages;
        },
        SET_SENDING(state, sending) {
            state.isSending = sending;
        }
    },
    actions: {
        setMessages({ commit }, messages) {
            commit('SET_MESSAGES', messages);
        },
        addMessage({ commit, state }, message) {
            commit('SET_MESSAGES', [message, ...state.messages]);
        },
        setSending({ commit }, sending) {
            commit('SET_SENDING', sending);
        }
    },
}