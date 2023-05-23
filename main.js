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
        openDisk(event){
            let album = event.target.closest('.disk');
            let bigger = document.createElement('div');
            bigger.className = 'bigger text-center';

            bigger.innerHTML = `
            <div class="single">
                <img class="mb-4 img-fluid" src="${album.querySelector('img').src}">
                <h2 class="text-white mb-3"> ${album.querySelector('h2').textContent} </h2>
                <h3 class="text-white mb-3"> ${album.querySelector('h3').textContent} </h3>
                <span class="text-white mb-3"> ${album.querySelector('span').textContent} </span>
            </div>
            `;

            document.body.prepend(bigger);
        }
    },

    mounted(){
        this.getMusic();
    },

}).mount('#app')