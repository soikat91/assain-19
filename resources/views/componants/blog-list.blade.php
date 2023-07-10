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
            // document.getElementById('loading-div').classList.remove('d-none');//loader show
            // document.getElementById('content-div').classList.add('d-none');//content hide
            // debugger;
            const response =await axios.get(url);
            // debugger;
            // document.getElementById('loading-div').classList.add('d-none');//loader hide
            // document.getElementById('content-div').classList.remove('d-none');//content show
            response.data.forEach((item)=>{

                document.getElementById('blog-list').innerHTML+=(
                    `<div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">${item['title']}</h2>
                                <p>${item['content']}</p>
                                <small> ${item['user_id']['name']}</small>
                                <a class="text-decoration-none" href="{{ url('/details') }}/${item['id']}" target="_blank">view more</a>
                            </div>
                            <img class="img-fluid" src="" alt="..." />
                        </div>
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