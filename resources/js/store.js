import { createStore } from 'vuex';
import user from '@/User/store';
import chat from '@/Chat/store';

export default createStore({
    modules: {
        user,
        chat
    }
});