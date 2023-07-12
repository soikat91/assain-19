<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Blogs</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div id="blog-list" class="col-lg-11 col-xl-9 col-xxl-8">
                

            </div>
        </div>
    </div>


</section>

<script>

blogList();//function call
    async function blogList(){

        let url='/blogsData';

          
          try{
             document.getElementById('loading-div').classList.remove('d-none');//loader show
             document.getElementById('content-div').classList.add('d-none');//content hide
            // debugger;
            const response =await axios.get(url);
            // debugger;
             document.getElementById('loading-div').classList.add('d-none');//loader hide
             document.getElementById('content-div').classList.remove('d-none');//content show
            response.data.forEach((item)=>{

                document.getElementById('blog-list').innerHTML+=(
                    `
                        <div class="card">
                            <img src="${item['image']}"style="max-height: 450px;" class="img-fluid card-img-top">
                            <div class="card-body">
                            <h4 class="card-title">${item['title']}</h4> 
                            <small class="text-muted">Category
                            
                            <span style="float:right" class="badge badge-dark badge-light">Comments</span>
                            <hr>
                            <p class="card-text" >${item['content']}</p>
                            <a href="/details/${item['id']}"style="float: right">
                            <span class="btn  btn-info">Read more>></span> </a>
                            </div>     
                        </div>               
                     `
                )
            })

          }catch(error){

            alert(error);
          }     
        
      


    }

</script>