<template>
    <section>
        <div class=" d-flex flex-column flex-wrap m-auto">
            <div class="d-flex flex-row flex-wrap" >
                <div class="p-2 text-center" style="max-width: 298px;" v-for="(video, index) in page.videos" :key="index">
                    <video class="m-auto" :src="`https://www.pornhub.com/embed/${video.video_id}`" frameborder="0" width="320" height="220" scrolling="no" allowfullscreen :key="index"></video>
                    <h6 class="text-white">{{ video.title }}</h6>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

export default {
    props:['page'],
    data(){
        return {

        }
    },
    mounted(){
        this.getIsActive()
    },
    methods:{
        getIsActive(){
            let data = {
                videos: this.page.videos
            }
            axios.post(`/get/is_active/`, data).then(res =>{
                if(res.data.is_active){

                }
                console.log(res)
            })
        
           
        }
    }
}
</script>
