import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faPaperPlane } from '@fortawesome/free-solid-svg-icons'

library.add(faPaperPlane)

export default {
    install: (app) => {
        app.use(library);
        app.component('icon', FontAwesomeIcon);
    }
}