@extends("layouts.masteradmin")
@section("content")
<script src="{{secure_asset('ckeditor/ckeditor.js')}}"></script>
<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <!-- <img src="{{secure_asset('imgs/logo.svg')}}" style="width:50px;" alt="">
                  <span class="d-none d-lg-block"></span> -->
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Publication article</h5>
                  </div>

                  <form class="row g-3 needs-validation" method="post" enctype="multipart/form-data" action="{{route('article.publier')}}" novalidate>
                  @csrf  
                  <div class="col-12">
                      <label for="IA" class="form-label">Nom IA </label>
                      <input type="text" name="ia" class="form-control" id="IA" required>
                      <div class="invalid-feedback">Please, enter IA name!</div>
                    </div>

                    <div class="col-12">
                      <label for="titre" class="form-label">Titre article</label>
                      <input type="email" name="titre" class="form-control" id="titre" required>
                      <div class="invalid-feedback">Veuillez entrez le titre!</div>
                    </div>

                    <div class="col-12">
                      <label for="editor" class="form-label">Contenu</label>
                      <div class="input-group has-validation">
                      
                        <textarea  name="description" class="form-control" id="editor"name="description" required> 
                        </textarea> 
                        <script>CKEDITOR.replace('editor')</script>
                        <div class="invalid-feedback">Veuillez entrez le contenu!</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="Photo" class="form-label">Photo</label>
                      <input type="file" name="photo" class="form-control" id="photo" required>
                      <div class="invalid-feedback">Veuillez entrez une photo!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <br>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Publier</button>
                    </div>
                    <div class="col-12">
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                
              </div>

            </div>
          </div>
        </div>

      </section>

@Endsection