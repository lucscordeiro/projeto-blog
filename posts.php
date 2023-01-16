<?php
include_once('templates/header.php');

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $post_id) {
            $currentPost = $post;
        }
    }
}
?>

<main id="post-container">

    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost['title'] ?> </h1>
        <p id="post-description"> <?= $currentPost['description'] ?> </p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt=" <?= $currentPost['title'] ?> ">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, saepe. Tempore est voluptatem officiis corrupti esse dolorem maiores vitae eos consectetur perspiciatis libero saepe sequi, accusamus deleniti facilis autem eum?
            Nisi molestiae minus labore voluptas eos illo optio eius repellendus omnis laboriosam aperiam possimus sint, iure natus odio nostrum a aliquid architecto sed nulla, quisquam qui error quibusdam iusto. Eligendi!
            Facilis mollitia pariatur modi consectetur quaerat? Consectetur libero laboriosam sequi voluptatibus quis iste velit molestiae commodi similique maiores! Rem corporis hic dolorem ab commodi sequi id illo reprehenderit laborum? Commodi.
            Dolorem, eveniet quisquam neque temporibus sit quibusdam unde dolorum nisi tempora voluptatum magnam accusamus quis, similique ad blanditiis ducimus ipsa tempore laboriosam dignissimos. Tempora, quia deserunt ad aperiam molestiae explicabo?
            Veniam architecto enim fugiat, deserunt molestiae in, repellendus quos doloribus dolor nemo dignissimos nisi harum soluta inventore delectus magnam dolores libero dolorum facere corporis voluptatibus eos doloremque iure. Eligendi, optio?</p>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, saepe. Tempore est voluptatem officiis corrupti esse dolorem maiores vitae eos consectetur perspiciatis libero saepe sequi, accusamus deleniti facilis autem eum?
            Nisi molestiae minus labore voluptas eos illo optio eius repellendus omnis laboriosam aperiam possimus sint, iure natus odio nostrum a aliquid architecto sed nulla, quisquam qui error quibusdam iusto. Eligendi!
            Facilis mollitia pariatur modi consectetur quaerat? Consectetur libero laboriosam sequi voluptatibus quis iste velit molestiae commodi similique maiores! Rem corporis hic dolorem ab commodi sequi id illo reprehenderit laborum? Commodi.
            Dolorem, eveniet quisquam neque temporibus sit quibusdam unde dolorum nisi tempora voluptatum magnam accusamus quis, similique ad blanditiis ducimus ipsa tempore laboriosam dignissimos. Tempora, quia deserunt ad aperiam molestiae explicabo?
            Veniam architecto enim fugiat, deserunt molestiae in, repellendus quos doloribus dolor nemo dignissimos nisi harum soluta inventore delectus magnam dolores libero dolorum facere corporis voluptatibus eos doloremque iure. Eligendi, optio?</p>
        <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, saepe. Tempore est voluptatem officiis corrupti esse dolorem maiores vitae eos consectetur perspiciatis libero saepe sequi, accusamus deleniti facilis autem eum?
            Nisi molestiae minus labore voluptas eos illo optio eius repellendus omnis laboriosam aperiam possimus sint, iure natus odio nostrum a aliquid architecto sed nulla, quisquam qui error quibusdam iusto. Eligendi!
            Facilis mollitia pariatur modi consectetur quaerat? Consectetur libero laboriosam sequi voluptatibus quis iste velit molestiae commodi similique maiores! Rem corporis hic dolorem ab commodi sequi id illo reprehenderit laborum? Commodi.
            Dolorem, eveniet quisquam neque temporibus sit quibusdam unde dolorum nisi tempora voluptatum magnam accusamus quis, similique ad blanditiis ducimus ipsa tempore laboriosam dignissimos. Tempora, quia deserunt ad aperiam molestiae explicabo?
            Veniam architecto enim fugiat, deserunt molestiae in, repellendus quos doloribus dolor nemo dignissimos nisi harum soluta inventore delectus magnam dolores libero dolorum facere corporis voluptatibus eos doloremque iure. Eligendi, optio?</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">

            <?php foreach ($currentPost['tags'] as $tag) : ?>
                <li>
                    <a href="#"> <?= $tag ?> </a>
                </li>
            <?php endforeach; ?>

        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">

            <?php foreach ($categories as $categorie) : ?>
                <li>
                    <a href="#"> <?= $categorie ?> </a>
                </li>
            <?php endforeach; ?>


        </ul>
    </aside>

</main>

<?php
include_once('templates/footer.php');
?>