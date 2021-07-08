<template>
    <section>
        <div class=" d-flex flex-column flex-wrap m-auto">
            <span class="text-white font-weight-bold mb-2">Anal</span>
            <div>
                <iframe class="m-auto" src="https://www.pornhub.com/embed/ph60a7cb84bbf29" frameborder="0" width="300" height="200" scrolling="no" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    data(){
        return {

        }
    },
    mounted(){
        this.getVideos()
    },
    methods:{
        async getVideos(){
            await axios.get('https://www.pornhub.com/webmasters/search?search=hard&tags[]=Teen&thumbsize=medium', {} , {
                headers: {
                    "Access-Control-Allow-Origin": "*"
                }
            }).then(res =>{
                console.log(res)
            }).catch(err =>{
                console.log(err)
            })
        }
    }
}
</script>
