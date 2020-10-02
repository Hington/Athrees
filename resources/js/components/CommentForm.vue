<template>

        <div>
            <h1 style="font-size: medium;"><strong style="color:red" id="ancre">Intervenant</strong></h1>
					<hr class="bg-light">
                    <div v-if="respondTo" @click="$emit('supprimer')">
                        <p>
<div class="mb-2"><span class="date"><em>En reponse à</em></span><strong style="color:blue; font-size: medium;"> {{respondTo.nom}} </strong><span class="comment"><em> sur </em></span><strong style=" font-size: medium;"> "{{respondTo.body}}" </strong></div>

                       <p> 
                           <a type="button" style="color:red"><i class="far fa-times-circle"></i>Annuller</a>
                       </p>
                        </p>
                    </div>
 <form method="POST" action="/blog-post" @submit.prevent="submitComment">
		<div class="form-row">
			<div class="form-group">
				<input class="btn btn-outline-dark" type="submit" value="Envoyer">
			</div>
					<div class="form-group col-md-6"> 
						<input v-model="form.nom" type="text" class="form-control"  id="exampleFormControlInput1" placeholder="name" >
                            <p v-if="errors.nom" style="color:red" v-text="errors.nom[0]" px-5 py-3></p>
					</div>
		    </div>
					<div class="form-group">
						<textarea v-model="form.body" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Entrez un commentaire"></textarea>
                            <p v-if="errors.body" style="color:red" v-text="errors.body[0]" px-3 py-1></p>
                    </div>
	</form>

        </div>
    
        
</template>

<script>
export default {
    props :['respondTo'],
    data(){
            return {
                form :{
                    nom : '',
                    body : '',
                    url : window.location.href,
                },
                errors : "",
            }
        },

        computed :{

            fullform (){
                if(this.respondTo){
                    return{
                        ...this.form,
                        respond_to_id: this.respondTo.id,
                    }

                }
                return this.form
            }
        },

        methods :{

            submitComment() {
                axios.post('/comments',this.fullform)
                .then(({data}) =>{
                    this.$emit('newComment', data)
                    this.form.body =""
                    this.errors = {}
                })
                .catch(error => {
                    this.errors = error.response.data.errors
                })
              
            },
        }
    
}
</script>