</section>
<!-- Footer -->
<!-- Footer -->
    <footer class="text-center py-5 bg-black text-white">
      <div class="container">
        <p>Palma's shop &copy; <?= date('Y') ?></p>
        <nav class="footer-links">
          <div class="footer-column">
            <ul>
              <li><h3>Información</h3></li>
              <li><a href="../../user/acerca" class="text-lg text-gray-700 hover:text-gray-900">Acerca de</a></li>
              <li><a href="../../user/contacto">Contacto</a></li>
            </ul>
          </div>
          <div class="footer-column">
            <ul>
              <li><h3>Productos</h3></li>
              <ul>
            <?php
              use Helpers\Utils;
              $categories = Utils::showCategories();
            ?>
            <?php while ($category = $categories->fetch_object()) : ?>
              <li>
                <a href="../../category/show&id=<?= $category->id ?>"><?= $category->nombre ?></a>
              </li>
            <?php endwhile; ?>
          </ul>
            </ul>
          </div>
        </nav>
      </div>
    </footer>
</div>
</body>

</html>