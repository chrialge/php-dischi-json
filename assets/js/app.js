console.log('ciao')

const { createApp } = Vue
createApp({
    data() {
        return {
            message: 'bellas',
            dischi: [],
            url: 'api.php'
        }
    },
    mounted() {
        axios.get(this.url)
            .then((result) => {
                console.log(result);
                this.dischi = result.data
            }).catch((err) => {
                console.log(err.message);
            })
    }
}).mount('#app')