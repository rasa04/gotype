const { random } = require("lodash")

const App = {
    data() {
        return {
            inputWord: ''
        }
    },
    methods: {
        keyPress(event){
            console.log(event.key);
            if (event.key == ' ') {
                this.inputWord = ''
            }
        }
    },
    computed: {

    },
    watch: {

    }
}

Vue.createApp(App).mount('#app')