console.log('ciao')

const { createApp } = Vue
createApp({
    data() {
        return {
            message: 'bellas',
            dischi: [],
            url: 'api.php',
            display: false,
            discoActive: ''
        }
    },
    methods: {
        discoInfo(disco) {
            console.log(disco)
            this.display = !this.display
            this.discoActive = disco
        }
    },
    mounted() {
        axios.get(this.url)
            .then((result) => {
                console.log(result);
                this.dischi = result.data;
            }).catch((err) => {
                console.log(err.message);
            })
    }
}).mount('#app')