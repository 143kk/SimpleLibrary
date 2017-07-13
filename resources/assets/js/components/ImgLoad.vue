<template>
    <div>
        <button class="btn btn-primary btn-sm" @click="loadImg" v-if="!done">点击加载（共 <strong>{{count}}</strong> 张）</button>
        <ul class="list-group" v-if="done">
            <li class="list-group-item list-group-item-info" v-for="img in img_count">
                <img :src="img_url+'/'+lib_id+'/'+author_id+'/'+id+'/'+img" class="img-responsive">
            </li>
        </ul>
    </div>
</template>
<script>
    export default{
        props:['id','count','lib_id','author_id','img_url'],
        data(){
            return {
                done:0,
                img_count:null
            }
        },
        methods:{
            loadImg(){
                axios.get('/api/imgcount/'+this.id).then(response =>{
                    this.done = 1
                    this.img_count = response.data
                })
            }
        }

    }
</script>