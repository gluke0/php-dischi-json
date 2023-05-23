const { createApp } = Vue

createApp({
    data() {
        return{
            apiUrl: 'api/music.php',
            disk: [],
        }
    },

    methods:{
        getMusic(){
            axios.get(this.apiUrl)
                .then((res)=>{
                    this.disk = res.data;
                });
        },
    },

    mounted(){
        this.getMusic();
    },

}).mount('#app')