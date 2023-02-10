import { groupMessages } from './helpers';

export default {
    namespaced: true,
    state: {
        messages: [],
        groups: [],
        isSending: false,
    },
    mutations: {
        SET_MESSAGES(state, messages) {
            state.messages = messages.slice(0,5);
            const groups = groupMessages(messages);
            state.groups = groups;
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