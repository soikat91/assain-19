
<div class="container ">
    <div class="row mt-4">
       <div class="col-sm-8">
          <h1>The Complete Responsive CMS Blog</h1> 
          <h1 class="lead">The Complete Responsive CMS Blog</h1>
        
                             
       
      <div class="card">
           <img src="{{ $post->image }}" class="img-fluid card-img-top">
           <div class="card-body">
               <h4  id="blog-title" class="card-title">{{ $post->title }}</h4> 
          
               <span style="float:right" class="badge badge-dark badge-light">Comments</span>
               <hr>
               <p id="blog-content" class="card-text" >
                 {{$post->content}}
               
               </p>
               
           </div>
      </div>

      


      <span class="Fieldinfo text-primary fw-bold">Comments</span>
      <br><br>
  
    
         <div> 
            @foreach ( $comments as $item )      
             

                <div class="media-comment bg-secondary text-light">            
                  
              
                    <div class="media-body  mt-2 ml-2">
                        <p>{{ $item ['content'] }}</p>             
                        
                        
                        
                    </div>
             
            </div>           
                
          
                
            
             
            
           @endforeach 
      </div>





       <div class="commentForm">
        <form  id="comment-form">
            <div class="mb-3">
                <input type="hidden" name="post_id" id="id" value="{{$post->id }}">
                <label for="exampleFormControlInput1" class="form-label">Write a comment</label>               
              </div>
              <div class="mb-3">

                <textarea class="form-control" id="content" name="content" rows="3" placeholder="comment"></textarea>
              </div>

              <div class="">
                <button type="submit" class="btn btn-primary mb-3">submit</button>
              </div>
        </form>
    </div>
    

          
      </div>
       <!--side area-->
       <div class="col-sm-4">
           <div class="card mt-4">
               <div class="card-body">
                   <img src="https://placehold.co/600x400" class="d-block img-fluid mb-3">
                   
               </div>
               <div class="text-center">
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum sed molestie ipsum. Etiam odio odio, aliquam sit amet porttitor a, tincidunt non elit. Pellentesque id diam at augue auctor dignissim in vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus
               
               </div>
           </div>
           <br>
           <div class="card ">
               <div class="card-header bg-dark text-white">
                   <h2 class="lead">Sign Up</h2>
               </div>
               <div class="card-body">
                   <button type="button" class="btn btn-success btn-block text-center" name="button">Join the Forum</button>
                   <button type="button" class="btn btn-danger btn-block text-center"name="button">Login</button>
                   <div class="input-group mt-2">
                       <input type="text" name="email"Placeholder="email">
                       <div class="input-group-append ">
                           <button type="button" class="btn btn-primary btn-sm text-center"name="button">Suscribe</button>
                       </div>
                       
                   </div>
                   
               </div>
           </div>
           <br>
           
           <div class="card-body">
             <div class="card-header bg-dark text-white">
                   <h2 class="lead">Categories</h2>
                   
               </div>
               <div class="card-body">
                  
 
 

                   
               </div>
           </div>
           <br>

           <!--recent post-->
                        
           
      </div>
      <!--side area end-->
         
    </div>
</div>




<script>


  let element=document.getElementById('comment-form');

element.addEventListener('submit',async(event)=>{
    event.preventDefault();
   

      let id=document.getElementById('id').value;

      let content=document.getElementById('content').value;
      //alert(content);
   
    if(content.length===0){
            alert("content is required");
        }else{

        let formData ={
            post_id: id,
            content: content,         
        }
        let url='/storeComment';
        let result=await axios.post(url,formData);      
        if(result){
            alert('Comment Added Successfully');
           element.reset();
        } 
       }

       
       
         


    
})


</script>