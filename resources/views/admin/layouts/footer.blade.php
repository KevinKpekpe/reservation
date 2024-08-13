   <!-- /.content-wrapper -->
   <footer class="main-footer">

   <strong>Copyright &copy; 2024 Designed by Spectre
   </footer>

   </div>
   <!-- ./wrapper -->
   <!-- jQuery -->
   <script src="{{ asset('assets/admin/plugins/jquery/jquery.min.js') }}"></script>
   <!-- Bootstrap 4 -->
   <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <!-- AdminLTE App -->
   <script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
   <!-- AdminLTE for demo purposes -->
   <script src="js/demo.js"></script>
   <script>
       // Fonction pour afficher les images sélectionnées
       function displaySelectedImages(input) {
           if (input.files && input.files.length > 0) {
               const selectedImagesContainer = document.getElementById('selected-images');
               selectedImagesContainer.innerHTML = ''; // Effacer le contenu précédent

               Array.from(input.files).forEach(file => {
                   const reader = new FileReader();
                   reader.onload = function(e) {
                       const img = document.createElement('img');
                       img.src = e.target.result;
                       img.classList.add('selected-image');
                       selectedImagesContainer.appendChild(img);
                   }
                   reader.readAsDataURL(file);
               });
           }
       }

       // Lorsque l'utilisateur choisit des images, afficher les images sélectionnées
       document.getElementById('image').addEventListener('change', function() {
           displaySelectedImages(this);
       });

       // Lorsque l'utilisateur clique sur une image sélectionnée, la supprimer
       document.getElementById('selected-images').addEventListener('click', function(event) {
           if (event.target.classList.contains('selected-image')) {
               event.target.remove();
           }
       });
   </script>

   </body>

   </html>
