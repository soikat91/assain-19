<div class="container ">
    <div class="row mt-4">
       <div class="col-sm-8">


<span class="Fieldinfo text-primary fw-bold">Comments</span>
    <br><br>

  
      <div> @foreach ( $comments as $item )
           <div class="media-comment bg-secondary text-light">
           
                
            
           <div class="media-body  mt-2 ml-2">
           
             
              
               <p>{{ $item ['content'] }}</p>
              
           </div>
           
          </div>
          @endforeach 
    </div>
  
    <hr>
      
    <div class="">
     <form action="" method="post" id="commentForm">
         <div class="card mt-3">
             <div class="card-header">
                <h3 class="Fieldinfo">Share your think</h3>
             </div>
             <div class="card-body">
                 <div class="form-group">
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text"><i class="fas fa-user"></i></span>
                         </div>
                      <input class="form-control" type="hiddw" name="id" id="post_id">   
                     </div>                          
                 </div>
                
                 <div class="form-group">
                     <textarea class="form-control" rows="6"cols="80" id="content"
                     name="content"></textarea>
                 </div> 
                 <div class="form-group">
                     <button type="submit" name="submit"class="btn btn-primary">Comment</button>                               
                 </div>       
             </div>
         </div>                    
     </form>
        
    </div>

       </div>
    </div>
</div>


<script>

    let element=document.getElementById('commentForm');

    element.addEventListener('submit',async(event)=>{
        event.preventDefault();//eta use korar karon holo browser without loading a data insert hobe mot ktha loading nibe na refresh dile
          
        
        let content=document.getElementById('content').value;        
        //alert(content);
        if(content.length===0){
            alert("Contnet is required");       
        }else{

            let formData ={
                content: content
                
            }

            let url="/storeComment";        

         
            let result=await axios.post(url,formData);          

            if(result.status===200 && result.data===1){

                alert("Comment Successfully");
                element.reset();
            }else{
                alert("something went wrong");
            }

        }
    })


</script>

