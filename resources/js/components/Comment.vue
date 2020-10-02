<template>
<div >
    <div class="mb-2"><span class="date">il y a {{Time}}</span><span class="comment"><a href="#ancre" type="button" @click="$emit('respond-to',comment)"><i class="fas fa-reply"></i>Repondre</a></span></div>
						    <div class="intro mb-2" style="font-size:large;"><em> {{comment.body}}</em></div>
						<footer class="blockquote-footer"><strong style="color:green; font-size: medium;">{{comment.nom}}</strong></footer> <br>
  <hr class="two">  <div class="border-l-5 pl-5 ml-3">

            <div class="meta mb-1" >
            <Comment 
            v-for="child in comment.children"
            :key="child.id" 
            :comment="child" 
            :now="now" 
            @respond-to="$emit('respond-to',$event)"
            ></Comment>

         </div>
    </div>
</div>    
</template>

<script>
import { formatDistance} from 'date-fns'
import {fr } from 'date-fns/locale'

export default {
    name : "Comment",

    props : ['comment', 'now'],

    computed :{
        Time(){
            return formatDistance(new Date(this.comment.created_at), this.now, { locale: fr })
        }
    },
    
}
</script>