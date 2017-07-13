<template>
    <div>
        <div class="col-md-6">
           <div class="input-group">
               <input type="text" name="keyword" class="form-control" placeholder="输入一个什么呢..." v-model="keyword" id="exampleSearch">
               <span class="input-group-btn">
                    <button class="btn btn-primary" @click.prevent="search">书名搜索</button>
                </span>
           </div>
        </div>


        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>书名</th>
                <th>作者</th>
                <th>Lib</th>
            </tr>
            </thead>
            <tbody>
                <template v-if="result.length > 0">
                    <tr v-for="book in result">
                        <td>{{book.id}}</td>
                        <td><a :href="'book/'+book.id" target="_blank">{{book.title}}</a></td>
                        <td><a :href="'/author/'+book.author.id" target="_blank">{{book.author.name}}</a></td>
                        <td>{{book.lib.name}}</td>
                    </tr>
                </template>
                <tr v-else-if="completed">
                    <td colspan="4">抱歉,暂无数据...</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
    export default{
        data(){
            return {
                keyword:null,
                result:[],
                complete:0
            }
        },
        methods:{
            search(){
                if(this.keyword){
                    this.completed = 0
                    axios.post('/api/search',{'keyword':this.keyword}).then(response =>{
                        this.result = response.data ? response.data : null
                        this.completed = 1
                    })
                }
            }
        }
    }
</script>