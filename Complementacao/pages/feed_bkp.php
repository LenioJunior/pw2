echo '
        <div class="card mb-3 border-bottom" style="max-width: 640px;">
          <div class="row sizeComment">
            <div class="col-md-3">
              <img src="../img/lenio.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Lênio</h5>
                <p class="card-text"> '. $conteudo . ' </p>
                <p class="card-text"><small class="text-body-secondary">Publicado em: ' .  getDateFromStr($data) . '</small></p>
                <div class="text-center">
                  <div class="row sizeComment">
                    <div class="col-9">
                      <label for="inputComment" class="visually-hidden">Comentar</label>
                      <input type="textarea" class="form-control" id="inputComment" placeholder="Comentar">
                    </div>
                    <div class="col-3">
                      <button type="submit" data-post="'.$id.'" id="btnComentario" class="btn btn-primary mb-3">Comentar</button>
                    </div>
                  </div>
                </div>
              </div>      
            </div>
          </div>
          <div class="row justify-content-left sizeComment">
            <div class="col-4">
              Comentários:
            </div>    
          </div>
          <div class="row justify-content-center sizeComment" id="divComentario-"'.$id.'">
            
          </div>
        </div>';