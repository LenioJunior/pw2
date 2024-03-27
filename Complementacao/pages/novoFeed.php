<div class="border-primary p-3">

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Novo Post
  </button>

  <!-- Modal -->
  <div class="modal fade modal-dialog modal-dialog-scrollable" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <!-- <div class="modal-content"> -->
        <!-- <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Nova Postagem</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div> -->
        <div class="modal-body">
          <form action="feed.php" method="POST">
            <!-- <main class="post">  -->
                <!-- <div class="wrapper">  -->
                <section class="create-post modal-content"> 
                        <header class="header"> 
                            <h5 class="card-body">Novo Post</h5> 
                            <div class="cross-icon"> 
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div> 
                        </header> 
                        <div class="post-header"> 
                            <div class="profile-pic">
                                <!-- <img src="../img/lenio.jpg" class="profile-pic" alt="..."> -->
                            </div> 
                            <div class="user-info"> 
                                <div class="full-name">IF Messaging</div> 
                                <div class="post-audience"> 
                                    <div class="friends-icon"></div> 
                                    <span class="audience-text">Amigos</span> 
                                    <div class="drop-down"></div> 
                                </div> 
                            </div> 
                        </div> 
                        <div class="post-content"> 
                            <textarea name="post-desc" id="post-desc" cols="30" rows="5" 
                                placeholder="O que você está pensando?"></textarea> 
                            <div class="emoji-picker"> 
                                <emoji-picker class="light"></emoji-picker> 
                                <i class="emoji" aria-label="Insert an emoji" role="img"></i> 
                            </div> 
                            <div class="add-to-your-post"> 
                                <span class="add-to-post-text">Adicione ao Post</span> 
                                <div class="add-to-post-icons"> 
                                    <div class="photo-video"></div> 
                                    <div class="tag-people"></div> 
                                    <div class="feeling-activity"></div> 
                                    <div class="check-in"></div> 
                                    <div class="gif"></div> 
                                    <div class="live-video"></div> 
                                </div> 
                            </div> 
                            <button class="post-btn" disabled>Post</button> 
                        </div> 
                    </section> 
                  
                    <?php
                        include('novoFeedAudience.php');
                    ?>
                <!-- </div>  -->
            <!-- </main>  -->
          </form>
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> -->
      <!-- </div> -->
    </div>
  </div>

</div>