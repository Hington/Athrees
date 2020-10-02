<template>
    <div>
        <div class="meta mb-1" >
            <Comment 
            v-for="comment in comments"
            :key="comment.id" 
            :comment="comment" 
            :now="now" 
            @respond-to="respondTo=$event"
            ></Comment> 
         
         <div v-if="nextPage" class="flex justify-center ">
           <a type="button" class="btn  btn-lg btn-block" @click="suivant(nextPage)">
               Charger {{ nombrePage - comments.length }} Commentaire En Plus
               </a>
         </div>
            </div>  

            <comment-form 
               :respond-to="respondTo" 
               @newComment="newComment"
               @supprimer="respondTo=null"
               ></comment-form>
    </div>
</template>
<script>

import CommentForm from './CommentForm.vue'
import Comment from './Comment.vue'

 export default {
        components:{CommentForm, Comment},
        
        data(){
            return {
                respondTo : null,
                comments : [],
                nextPage : null,
                nombrePage : 0,
                now : new Date(),
            }
        },

        mounted (){
            setInterval(()=>{
                this.now = new Date()
            },1000)
            axios.get('/comments/' + btoa(window.location.href))
                .then(({data: pagination}) =>{
                    this.comments = pagination.data
                    this.nextPage = pagination.next_page_url
                
                })
            
        },

        methods:{
            suivant(url){
                axios.get(url)
                .then(({data: pagination}) =>{
                    this.comments = this.comments.concat(pagination.data)
                    this.nextPage = pagination.next_page_url
                    this.nombrePage = pagination.total
                
                })
            },
            newComment(comment){

                if (! this.respondTo){
                    this.comments.push(comment)
                    return
                }
                this.respondTo.children.push(comment)
            }
        },

    }
</script>